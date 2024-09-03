<?php
include 'Modelo/topo.php';
?>

        <div class="container-fluid">
          <div class="row flex-nowrap">
          <?php include 'Modelo/menu_lateral.php';?>

              <div class="col py-3 bg-secondary">
                <div class="container-fluid">
                  <div class="col-12">
                    <div class="card p-3">
                      <h3 class="text-center">Inserir Clientes</h3>
                    </div>

                    <div class="card p-3 mt-4">

                      <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Sobrenome">
                      </div>

                      <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Cep" aria-label="Cep">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Complemento" aria-label="Complemento">
                        </div>
                      </div>

                      <div class="p-4">
                        <button type="button" class="btn btn-primary">Enviar</button>
                      </div>
                      

                    </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>