<?php
  include 'header.php';
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">SERVICIOS</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
    
                <div class="col-md-12"  id="s-servicio">

                    <!-- <div class="row">
                        <div class="col-md-3">
                            <a v-bind:href="`${producto +`?action=`+'productos'}`"><button type="button" name="filter" class="btn btn-info btn-xs">Producto</button></a>
                        </div>

                        <div class="col-md-3">
                            <a v-bind:href="`${productoldm +`?action=`+'productos'}`"><button type="button" name="filter" class="btn btn-info btn-xs" >ProductoLDM</button></a>
                        </div>

                        <div class="col-md-3">
                            <a v-bind:href="`${maquila +`?action=`+'productos'}`"><button type="button" name="filter" class="btn btn-info btn-xs" >Maquila</button></a>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button @click="abrirModal('agregar')" class="btn btn-primary">Nuevo</button>
                        </div>
                    </div>
                    <br>

                    <div class="col-sm-16 col-sm-offset-4">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Servicio</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Activo</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="row in ServicioCollection">
                                        <td v-text="row.id_s_servicio"></td>
                                        <td v-text="row.nombre"></td>
                                        <td v-text="row.servicio"></td>
                                        <td v-text="row.url"></td>
                                        <td v-text="row.status_activo"></td>
                                        <!-- <td><a v-bind:href="`${row.archivo +`?action=`+ row.nombre }`">SIncronizar</a></td> -->
                                        <td><button type="button" name="editar" class="btn btn-success edit"  @click="abrirModal('',row)">Editar</button></td>
                                        <td><button type="button" name="eliminar" class="btn btn-danger delete"  @click="eliminar(row.id_s_servicio)">Eliminar</button></td>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--inicio del modal-->
                    <b-modal v-model="modalServicios">

                        <template  slot="modal-header">
                            <h5>{{tituloModal}}</h5>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </template>

                        <b-container fluid>
                            <div>
                                <b-form>
                                    <b-form-group  class="mb-10 mt-10" label="Nombre:">
                                        <b-form-input type="text" v-model="nombre" require></b-form-input>
                                    </b-form-group>

                                    <b-form-group class="mb-10 mt-10" label="Url:">
                                        <b-form-input type="text" v-model="url" required></b-form-input>
                                    </b-form-group>

                                    <b-form-group class="mb-10 mt-10" label="Archivo:">
                                        <b-form-input type="text" v-model="archivo" required></b-form-input>
                                    </b-form-group>

                                    <b-form-group class="mb-10 mt-10" label="Servicio:">
                                        <b-form-input type="text" v-model="servicio" required></b-form-input>
                                    </b-form-group>

                                    <b-form-group class="mb-10 mt-10">
                                        <b-form-checkbox v-model="activo"><label>Activo</label></b-form-checkbox>
                                    </b-form-group>

                                </b-form>
                            </div>
                        </b-container>

                        <div slot="modal-footer" class="w-100">
                            <b-button v-if="modoAgregar" variant="primary" class="float-right ml-2" @click="comprobar(1);">
                                Agregar<i class="fas fa-plus-circle"></i>
                            </b-button>

                            <b-button v-else variant="primary"class="float-right ml-2" @click="comprobar(2);">
                                Editar<i class="fas fa-pen"></i>
                            </b-button>

                            <b-button variant="danger" class="float-right" @click="cerrarModal()">
                                Cerrar <i class="fas fa-times-circle"></i>
                            </b-button>
                        </div>
                    </b-modal>
  

                </div>


            </div>
        </div>
      </div>

      
    <script type="text/javascript" src="../js/s_servicio/s_servicio.js"></script>

<?php
include 'footer.php';
?>