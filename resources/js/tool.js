Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-releases',
            path: '/nova-releases',
            component: require('./components/AllReleases'),
        },
    ])
})
