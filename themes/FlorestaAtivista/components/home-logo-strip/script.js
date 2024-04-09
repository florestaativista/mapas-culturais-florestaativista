app.component('home-logo-strip', {
    template: $TEMPLATES['home-logo-strip'],

    setup(props) { },
    mounted() { },

    data() {
        return {}
    },

    computed: {
        agentList() {
            return $MAPAS.config.homeLogoStrip.agentList;
        },
        homeLogoStripActive() {
            return $MAPAS.config.homeLogoStrip.homeLogoStripActive;
        },
    },

    props: {},

    methods: {

        getAvatar(item) {
            if (item.files?.avatar) {
                return item.files?.avatar.url;
            }
            return null;
        },
        href(item) {
            return item.singleUrl;
        }
    },
});