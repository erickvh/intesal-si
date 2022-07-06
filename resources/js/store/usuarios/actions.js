import axios from "axios";

export default {
    actualizarUsuarios({ commit }, data) {
        commit("actualizarLoading");
        axios
            .get(`/usuarios/listar?page=${data.page}&search=${data.search}`)
            .then((res) => {
                commit("actualizarUsuarios", res.data);
                commit("actualizarLoading");
            })
            .catch((err) => {
                console.log(err);
            });
    },
}