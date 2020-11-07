<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Crear nuevo usuario</h1>
    </div>
    <div clas="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Nuevo Usuario</h6>
                </div>
                <div class="card-body">
                    <form action="?view=Roles&action=CrearRol" method="post" class="user">
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                      <input type="text" name="usuario" class="form-control form
                    -control-user" required id="exampleFirstName" 
                    placeholder="Nombre del usuario">
                    </div>
                    <div class="col-sm-4">
                        <textarea name="direccion" id=""  class="form-control form-control-user " required placeholder="Direccion"></textarea>
                        </div>
                </div>
                    <div class="col-sm-4 ">
                    <input type="text" name="usuario" class="form-control form-control-user" required id="exampleFirstName" placeholder="Nombre del usuario">
                </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-sm-6">
                            <input type="submit" value="Guardar" class="btn btn-primary btn-user btn-block">
                        </div>
                    </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>
        <!-- /.container-fluid -->
