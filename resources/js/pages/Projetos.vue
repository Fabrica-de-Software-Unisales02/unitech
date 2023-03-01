<template>
    <div class="row flex-md-row flex-column-reverse">
        <Loader v-show="!loaded"></Loader>
        <h2>Projetos</h2>
        <form class="bg-dark px-4 pb-4 rounded" @submit.prevent="addProject">
            <div class="form-group">
                <label class="form-label" for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" v-model="titulo">
            </div>
            <div class="form-group">
                <label class="form-label" for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" rows="3" v-model="descricao"></textarea>
            </div>
            <div class="form-group">
                <label class="form-label" for="status">Status</label>
                <select class="form-select" id="status" v-model="status">
                    <option value="1">Em execução</option>
                    <option value="0">Concluído</option>
                </select>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-outline-primary fw-bold w-100">Adicionar Projeto</button>
            </div>
        </form>
        <Modal
            v-show="showModal"
            @response="deleteProject"
            @close="showModal = false"
            :message="'tem certeza que deseja remover o projeto ' + projeto.titulo"
        ></Modal>
        <div>
            <h3>Projetos em Execução</h3>
            <div class="row">
                <div
                    class="col-md-4 card bg-dark"
                    v-for="projeto in projetos"
                    style="height: 150px;"
                >
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title">{{ projeto.titulo }}</h5>
                        <div class="actions" style="width: 3rem; display: flex;">
                            <i
                                class="bi bi-pencil ms-2 pointer"
                                style="font-size: 1rem"
                            ></i>
                            <i
                                @click="askDelete(projeto)"
                                class="bi bi-trash ms-2 pointer"
                                style="font-size: 1rem"
                            ></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ projeto.descricao.length < 25 ? projeto.descricao : projeto.descricao.slice(0, 25) + '...' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Loader from "../components/Loader.vue";
import Modal from "../components/Modal.vue";
import Api from "../mixins/Api.vue";

export default {
    data() {
        return {
            loaded: false,

            titulo: "",
            descricao: "",
            status: 1,

            showModal: false,
            projeto: {},

            projetos: [],

            link_conditions: [
                {
                    nome: '',
                    condicao: ''
                },
                {
                    nome: 'executando',
                    condicao: ';status:=:1'
                }
            ],

            condicao: 'executando',

        };
    },

    created() {
        this.getProjects();
    },

    mounted() {
        this.loaded = true;
    },

    methods: {
        getProjects() {
            this.loaded = false;

            let condition = this.link_conditions.filter(link_condition => {
                return link_condition.name == this.condicao;
            });

            this.get('projetos?conditions=disabled_at' + condition, data => {
                this.projetos = data;
                this.loaded = true;
                this.showModal = false;
            }, null, true)

        },

        addProject() {
            this.loaded = false;

            const payload = {
                titulo: this.titulo,
                descricao: this.descricao,
                area: 1,
                status: this.status,
            };

            this.post('admin/projeto', payload, (data) => {
                this.loaded = true;

                this.titulo = this.descricao = this.area = "";

            }, error => {
                this.loaded = true;
            });
        },

        askDelete(projeto) {
            this.showModal = true;
            this.projeto = projeto;
        },

        deleteProject() {

            this.loaded = false;

            this.del('admin/projeto/' + this.projeto.id, (data) => {
                this.getProjects();

            }, error => {
                console.log(error);
                this.loaded = true;
            });
        },
    },

    components: { Loader, Modal },

    mixins: [ Api ]

};

</script>
