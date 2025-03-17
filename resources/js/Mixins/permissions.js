export default {
    methods: {
        can: function (query) {
            var permissions = this.$page.props.auth.can;
            return permissions[query];
        },
        canAny: function (query) { 
            var permissions = this.$page.props.auth.can;
            return query.some((item) => permissions[item]);
        },
        canAll: function (query) {
            var permissions = this.$page.props.auth.can;
            return query.every((item) => permissions[item]);
        },
    }
}
