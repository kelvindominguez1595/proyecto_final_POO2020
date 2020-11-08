<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Editar usuario</h1>
    </div>
    <div clas="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Editar usuario</h6>
                </div>
                <div class="card-body">
                    <form action="?view=Usuarios&action=ActualizarUsuario" method="post" class="user">
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                            <input type="text" name="nombres" value="<?php echo $data->nombres; ?>" class="form-control form-control-user" required id="exampleFirstName" placeholder="Nombres">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="direccion" id="" value="<?php echo $data->direccion; ?>" class="form-control form-control-user" required placeholder="Direccion">
                        </div>
                        <div class="col-sm-3">
                        <input type="tel" name="telefono" value="<?php echo $data->telefono; ?>" placeholder="Número de telefono"class="form-control form-control-user">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" name="usuario" id=""value="<?php echo $data->usuario; ?>"  class="form-control form-control-user" required placeholder="Usuario">
                        </div>
                        <div class="col-sm-4">
                         <input type="text" name="pass" id="" value="<?php echo $data->pass; ?>" class="form-control form-control-user" required placeholder="Contraseña"> 
                        </div>
                        <div class="col-sm-3">
                            <input type="number" step="any" min="0"  name="roles_id" value="<?php echo $data->roles_id; ?>" class="form-control form-control-user" required id="exampleFirstName" placeholder="Rol">
                        </div>
                    </div>
                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-sm-6">
                            <input type="submit" value="Actualizar" class="btn btn-primary btn-user btn-block">
                        </div>
                    </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>
        <!-- /.container-fluid -->
