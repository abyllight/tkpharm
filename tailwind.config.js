module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false,
    theme: {
        extend: {
            colors: {
                'footer': '#D9F1FF',
                'footer-color': '#111111',
                'footer-label': '#7493A5',
                'footer-divider': '#81AFC9',
                'h-start': '#4195F8',
                'h-end': '#044592',
                'cover': '#0F0F0F',
                'cert': '#E65454',
                'management': '#992B59',
                'news': '#0390B4',
                'news-gray': '#9D9D9D',
                'products': '#20B287',
                'gallery': '#EB8444',
                'slide': '#03728D'
            },
            fontFamily: {
                'body': ['Montserrat']
            },
            backgroundImage: theme => ({
                'hero': "url('/img/hero.jpg')",
                'about': "url('/img/about.jpg')",
                'bird-sm': "url('/img/bird-sm.jpg')",
                'bird-lg': "url('/img/bird-lg.jpg')",
                'partner': "url('/img/partners.jpg')"
            })
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
        require('autoprefixer')
    ],
}
