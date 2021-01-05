window.nextgenEditor.addHook('hookInit', () => {
    window.nextgenEditor.addButtonGroup('learn2-with-git-sync', {
        label: 'Learn2 with Git Sync',
    });
});

window.nextgenEditor.addShortcode('h5p', {
    type: 'block',
    plugin: 'learn2-with-git-sync',
    title: 'H5P',
    button: {
        label: 'H5P',
        group: 'learn2-with-git-sync',
    },
    attributes: {
        url: {
            type: String,
            innerHTML: true,
            title: 'URL',
            widget: 'input-text',
            default: '',
        },
    },
    titlebar({ attributes }) {
        return `URL: <strong>${attributes.url || '<em>No URL provided</em>'}</strong>`;
    },
    content({ attributes }) {
        return attributes.url

          ? `<div style="position:relative;padding-bottom:100%;height:0;padding-bottom:56.2493%;"><iframe src="${attributes.url}" width="400" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script></div>`
          : '<div style="margin:36px;text-align:center;">No URL provided</div>';
    },
    preserve: {
        block: [
            'iframe',
            'script',
        ],
    },
});
