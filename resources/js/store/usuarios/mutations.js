import swal from "sweetalert";
export default {
    // basics
    actualizarLoading(state) {
        state.loading = !state.loading;
    },
    guardarErrors(state, error) {
        state.errors = error.response.data.errors;
    },
    actualizarButton(state) {
        state.active = !state.active;
    },
    eliminarErrores(state) {
        state.errors = {};
    },
    actualizarUsuarios(state, data) {
        state.usuarios = data.usuarios.data;
        state.pagination = {
            total: data.pagination.total,
            current_page: data.pagination.current_page,
            per_page: data.pagination.per_page,
            last_page: data.pagination.last_page,
            from: data.pagination.from,
            to: data.pagination.to,
        };
    },
};