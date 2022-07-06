export default {
    isActived: function (state) {
        return state.pagination.current_page;
    },
    pagesNumber: function (state) {
        if (!state.pagination.to) {
            return [];
        }

        var from = state.pagination.current_page - state.offset;
        if (from < 1) {
            from = 1;
        }

        var to = from + state.offset * 2;
        if (to >= state.pagination.last_page) {
            to = state.pagination.last_page;
        }

        var pagesArray = [];
        while (from <= to) {
            pagesArray.push(from);
            from++;
        }
        return pagesArray;
    },
};