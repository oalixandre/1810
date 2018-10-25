<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, user-scalable=no" />
  <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>1810</title>
</head>
<body>
  <main>
    <section class="mtb-15">
      <div class="container">
        <div class="row" role="grid">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" role="gridcell">
            <a class="card-list-car" href="">
              <span class="car-image">
                <img src="assets/img/default.jpg" alt="Foto de um Honda Fit azul" />
              </span> <!-- /.car-image -->
              <span class="car-title">Lorem ipsum dolor sit amet</span>
              <span class="car-price"><span class="sup">R$</span> 00.000,00</span>
              <span class="car-detail">
                <span class="car-detail-color">
                  <i class="material-icons" aria-hidden="true">&#xe916;</i>
                  <span title="ano">2000/2000</span>
                </span>
                <span class="car-detail-fuel">
                  <i class="material-icons" aria-hidden="true">&#xe546;</i>
                  <span>Fuel</span>
                </span>
                <span class="car-detail-transmission">
                  <i class="material-icons" aria-hidden="true">&#xe8d6;</i>
                  <span>Transmission</span>
                </span>
              </span> <!-- /.car-detail -->
            </a> <!-- /.card-list-car -->
          </div>
        </div> <!-- /.row -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <article>
              <h1 class="h1">Lorem ipsum dolor</h1>
              <h2 class="h2">Lorem ipsum dolor</h2>
              <h3 class="h3">Lorem ipsum dolor</h3>
              <h4 class="h4">Lorem ipsum dolor</h4>
              <h5 class="h5">Lorem ipsum dolor</h5>
              <h6 class="h6">Lorem ipsum dolor</h6>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
              <p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
              <p>
            </article>
          </div>
        </div> <!-- /.row -->
        <form id="form">
          <fieldset class="container-fluid fluid">
            <legend>Dados pessoais</legend>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input class="form-control" id="nome" pattern="(?=^.{3,60}$)^[A-ZÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñ][a-zÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñ]+(?:[ ](?:da|das|do|dos|de|e|[A-ZÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñ_][a-zÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñ]+))*$" placeholder="Nome completo" required type="text">
                  <label class="form-label" for="nome" role="contentinfo">
                    <span>Nome</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input class="form-control" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="exemple@exemple" required type="email">
                  <label class="form-label" for="email">
                    <span>E-mail</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                <div class="form-group">
                  <input class="form-control" id="tel" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder="Apenas números" required type="tel">
                  <label class="form-label" for="tel">
                    <span>Telefone</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                <div class="form-group">
                  <input class="form-control" id="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="Apenas números" required type="text">
                  <label class="form-label" for="cpf">
                    <span>CPF</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
            </div> <!-- /.row -->
          </fieldset>
          <fieldset class="container-fluid fluid">
            <legend>Dados Residenciais</legend>
            <div class="row">
              <div class="col-xs-3 col-sm-3 col-md-4 col-lg-5">
                <div class="form-group">
                  <input class="form-control" id="endereco" pattern="(?=^.{3,60}$)^[A-ZÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñ][a-zÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñ]+(?:[ ](?:da|das|do|dos|de|e|[A-ZÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñ_][a-zÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑáàâãéèêíïóôõöúçñ]+))*$" placeholder="Rua, avenida..." required type="text">
                  <label class="form-label" for="endereco">
                    <span>Endereço</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                <div class="form-group">
                  <input class="form-control" id="numero" pattern="^[0-9]+$" placeholder=" " required type="text">
                  <label class="form-label" for="numero">
                    <span>Número</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <input class="form-control" id="bairro" placeholder=" " required type="text">
                  <label class="form-label" for="bairro">
                    <span>Bairro</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
                <div class="form-group">
                  <input class="form-control" id="complemento" placeholder=" " type="text">
                  <label class="form-label" for="complemento">
                    <span class="input-tooltip" data-title="Apartamento, bloco...">Complemento</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <select class="form-control" id="cidade" required>
                    <option selected value=""></option>
                    <option value="cidade">Cidade</option>
                  </select>
                  <label class="form-label" for="cidade">
                    <span>Cidade</span>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
                <div class="form-group">
                  <input class="form-control" id="cep" pattern="\d{5}\-\d{3}" placeholder=" " required type="text">
                  <label class="form-label" for="cep">
                    <span>CEP</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <select class="form-control" id="uf" required>
                    <option selected value=""></option>
                    <option value="uf">UF</option>
                  </select>
                  <label class="form-label" for="uf">
                    <span>UF</span>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
            </div> <!-- /.row -->
          </fieldset>
          <fieldset class="container-fluid fluid">
            <legend>Preferência de contato</legend>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input class="form-control-radio" id="rdo-1" name="radio" required type="radio">
                  <label for="rdo-1">Desejo receber contato via <span class="bold">Telefone</span></label>
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="form-group">
                  <input class="form-control-radio" id="rdo-2" name="radio" required type="radio">
                  <label for="rdo-2">Desejo receber contato via <span class="bold">E-mail</span></label>
                </div> <!-- /.form-group -->
              </div>
            </div> <!-- /.row -->
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input class="form-control-check" id="chk-1"name="checkbox" required type="checkbox">
                  <label for="chk-1">Aceito os <a aria-label="termos" data-toggle="modal" href="#">termos de <span class="bold">privacidade</span></a></label>
                  <div aria-labelledby="termos" class="modal" id="termos" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <a aria-label="termos" class="close-button" data-toggle="modal" href="#" role="button" title="Fechar">
                          <i class="material-icons" aria-hidden="true">&#xE5C9;</i>
                        </a>
                        <article>
                          <span class="h3">Lorem ipsum dolor sit</span>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </article>
                      </div> <!-- /.modal-content -->
                    </div> <!-- /.modal-dialog -->
                    <span aria-label="termos" class="overlay" data-toggle="modal"></span>
                  </div> <!-- /.modal -->
                </div> <!-- /.form-group -->
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <textarea class="form-control" id="msg" placeholder="Escreva algo" required></textarea>
                  <label class="form-label" for="msg">
                    <span>Mensagem</span>
                    <i class="material-icons success" aria-hidden="true">&#xE86C;</i>
                    <i class="material-icons error" aria-hidden="true">&#xE000;</i>
                  </label>
                  <span class="aux-effect"></span>
                </div> <!-- /.form-group -->
              </div>
            </div> <!-- /.row -->
          </fieldset>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <button class="button medium default-bg-color" type="submit">Enviar dados</button>
            </div>
          </div> <!-- /.row -->
        </form>
      </div> <!-- /.container -->
    </section>
  </main>
  <script async defer src="assets/js/custom.js" type="text/javascript"></script>
  <noscript>O seu navegador atualmente não executa scripts. Os scripts são necessários para uma melhor experiência de navegação. Habilite em seu navegador o uso de scripts.</noscript>
</body>
</html>
