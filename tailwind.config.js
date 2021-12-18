module.exports = {
    purge: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
        'config.production.php',
        'config.php'
    ],
    theme: {
        flex: {
            '5': '5 5 0%',
        },
        extend: {
            colors: {
                'primary': '#1B1B26',
                'secondary': '#1F1F2B',
                'custom-yellow': '#CAB232',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
