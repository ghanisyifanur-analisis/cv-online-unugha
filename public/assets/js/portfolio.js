(() => {
    const root = document.documentElement;
    const themeButton = document.querySelector('.theme-toggle');
    const setTheme = (theme) => {
        root.dataset.theme = theme;
        localStorage.setItem('portfolio-theme', theme);
        if (themeButton) themeButton.setAttribute('aria-label', theme === 'dark' ? 'Aktifkan tema terang' : 'Aktifkan tema gelap');
    };
    themeButton?.addEventListener('click', () => setTheme(root.dataset.theme === 'dark' ? 'light' : 'dark'));

    const menuButton = document.querySelector('.mobile-menu');
    const nav = document.querySelector('.primary-nav');
    menuButton?.addEventListener('click', () => {
        const expanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', String(!expanded));
        nav?.classList.toggle('is-open', !expanded);
    });
    nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
        nav.classList.remove('is-open');
        menuButton?.setAttribute('aria-expanded', 'false');
    }));

    document.querySelectorAll('.copy-citation').forEach(button => button.addEventListener('click', async () => {
        try {
            const citation = atob(button.dataset.bibtex || '');
            await navigator.clipboard.writeText(citation);
            const original = button.textContent;
            button.textContent = 'Tersalin ✓';
            setTimeout(() => button.textContent = original, 1600);
        } catch { button.textContent = 'Clipboard tidak tersedia'; }
    }));
    document.querySelectorAll('.copy-email').forEach(button => button.addEventListener('click', async () => {
        try { await navigator.clipboard.writeText(button.dataset.email); button.textContent = 'Email tersalin ✓'; }
        catch { button.textContent = button.dataset.email; }
    }));

    const filters = document.querySelectorAll('[data-filter]');
    const cases = document.querySelectorAll('.case-card');
    filters.forEach(button => button.addEventListener('click', () => {
        filters.forEach(item => { item.classList.toggle('active', item === button); item.setAttribute('aria-pressed', String(item === button)); });
        cases.forEach(card => { card.hidden = button.dataset.filter !== 'all' && card.dataset.category !== button.dataset.filter; });
    }));

    const sample = {
        timestamp: new Date().toISOString(),
        source: 'browser-lab-synthetic',
        region: 'Cilacap',
        service: { name: 'portfolio-api', status: 'healthy', latency_ms: 42 },
        telemetry: { requests_per_minute: 128, error_rate_percent: 0.4, cpu_percent: 23.8 },
        security: { hsts: true, csp: true, cors: 'restricted' }
    };
    const jsonOutput = document.querySelector('#json-output');
    const filterInput = document.querySelector('#json-filter');
    const filterJson = (value, query) => {
        if (!query) return value;
        if (value === null || typeof value !== 'object') {
            return String(value).toLowerCase().includes(query) ? value : undefined;
        }
        const entries = Object.entries(value).reduce((result, [key, child]) => {
            if (key.toLowerCase().includes(query)) result[key] = child;
            else {
                const match = filterJson(child, query);
                if (match !== undefined) result[key] = match;
            }
            return result;
        }, {});
        return Object.keys(entries).length ? (Array.isArray(value) ? Object.values(entries) : entries) : undefined;
    };
    const createJsonNode = (key, value, rootNode = false) => {
        const node = document.createElement('div');
        node.className = 'json-tree-node';
        if (value !== null && typeof value === 'object') {
            const details = document.createElement('details');
            details.open = rootNode;
            const summary = document.createElement('summary');
            const count = Object.keys(value).length;
            summary.textContent = key + (Array.isArray(value) ? ' [array: ' : ' [object: ') + count + ']';
            details.append(summary);
            Object.entries(value).forEach(([childKey, childValue]) => details.append(createJsonNode(childKey, childValue)));
            node.append(details);
        } else {
            const leaf = document.createElement('span');
            leaf.textContent = key + ': ' + JSON.stringify(value);
            node.append(leaf);
        }
        return node;
    };
    const renderJson = () => {
        if (!jsonOutput) return;
        const query = (filterInput?.value || '').trim().toLowerCase();
        const filtered = filterJson(sample, query);
        jsonOutput.replaceChildren();
        jsonOutput.append(filtered === undefined
            ? document.createTextNode('Tidak ada atribut yang cocok.')
            : createJsonNode('telemetry', filtered, true));
    };
    filterInput?.addEventListener('input', renderJson);
    renderJson();
    document.querySelector('.copy-json')?.addEventListener('click', async () => {
        try { await navigator.clipboard.writeText(JSON.stringify(sample, null, 2)); document.querySelector('.copy-json').textContent = 'Tersalin ✓'; }
        catch { document.querySelector('.copy-json').textContent = 'Gagal menyalin'; }
    });

    document.querySelector('#run-api')?.addEventListener('click', () => {
        const method = document.querySelector('#api-method').value;
        const endpoint = document.querySelector('#api-endpoint').value;
        const result = document.querySelector('#api-result');
        result.textContent = JSON.stringify({ simulated: true, method, endpoint, status: 200, statusText: 'OK (mock)', latency_ms: 18, headers: { 'Strict-Transport-Security': 'max-age=31536000', 'Content-Security-Policy': "default-src 'self'", 'Access-Control-Allow-Origin': 'same-origin' }, note: 'Respons sintetis; tidak ada request jaringan.' }, null, 2);
    });

    const canvas = document.querySelector('#telemetry-chart');
    if (canvas && window.Chart) {
        new Chart(canvas, {
            type: 'line',
            data: { labels: ['09:00', '09:05', '09:10', '09:15', '09:20', '09:25', '09:30'], datasets: [
                { label: 'Requests / min', data: [82, 96, 91, 128, 117, 142, 131], borderWidth: 2, tension: .35 },
                { label: 'Latency (ms)', data: [31, 38, 35, 42, 39, 47, 41], borderWidth: 2, tension: .35 }
            ] },
            options: { responsive: true, plugins: { legend: { labels: { color: getComputedStyle(root).getPropertyValue('--text') } } }, scales: { x: { ticks: { color: '#888' }, grid: { color: 'rgba(128,128,128,.12)' } }, y: { ticks: { color: '#888' }, grid: { color: 'rgba(128,128,128,.12)' } } } }
        });
    }
    document.querySelectorAll('.lab-tab').forEach(button => button.addEventListener('click', () => {
        document.querySelectorAll('.lab-tab').forEach(tab => { tab.classList.toggle('active', tab === button); tab.setAttribute('aria-selected', String(tab === button)); });
        document.querySelectorAll('.lab-panel').forEach(panel => { panel.hidden = panel.id !== button.getAttribute('aria-controls'); });
    }));
})();