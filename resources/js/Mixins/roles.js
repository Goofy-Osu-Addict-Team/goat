export default {
    methods: {
        is: function (query) {
            var roles = this.$page.props.auth.is;
            return roles[query];
        },
        isAny: function (query) {
            var roles = this.$page.props.auth.is;
            return query.some((item) => roles[item]);
        },
        isAll: function (query) {
            var roles = this.$page.props.auth.is;
            return query.every((item) => roles[item]);
        },
    }
}
