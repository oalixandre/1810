<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <meta name="description" content="" />
  <meta name="author" content="Auto Avaliar" />
  <meta name="theme-color" content="#fff" />
  <title>1810</title>
  <link href="assets/css/bootstrap-grid.min.css" media="nope!" onload="this.media='all'" rel="stylesheet" type="text/css" />
  <link href="assets/css/custom.css" media="nope!" onload="this.media='all'" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" media="nope!" onload="this.media='all'" rel="stylesheet" />
  <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <![endif]-->
</head>
<body>
  <main>
    <span id="loader" style="background: rgba(255, 255, 255, .98) url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjAiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBkPSJNNzUuNCAxMjYuNjNhMTEuNDMgMTEuNDMgMCAwIDEtMi4xLTIyLjY1IDQwLjkgNDAuOSAwIDAgMCAzMC41LTMwLjYgMTEuNCAxMS40IDAgMSAxIDIyLjI3IDQuODdoLjAyYTYzLjc3IDYzLjc3IDAgMCAxLTQ3LjggNDguMDV2LS4wMmExMS4zOCAxMS4zOCAwIDAgMS0yLjkzLjM3eiIgZmlsbD0iIzFiMzA1ZCIgZmlsbC1vcGFjaXR5PSIxIi8+PGFuaW1hdGVUcmFuc2Zvcm0gYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIiB0eXBlPSJyb3RhdGUiIGZyb209IjAgNjQgNjQiIHRvPSIzNjAgNjQgNjQiIGR1cj0iMTgwMG1zIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSI+PC9hbmltYXRlVHJhbnNmb3JtPjwvZz48L3N2Zz4=') no-repeat center center;content: '';height: 100%;left: 0px;opacity: 1;position:fixed;top: 0px;transition:all .35s ease;width: 100%;text-indent:-999px;z-index: 999">Carregando...</span>
    <header></header>
    <section class="slide-full">
      <div class="slider full-page--aux" id="slide-home">
        <div class="slider-container">
          <div class="item">
            <img src="https://via.placeholder.com/1400x500" alt="">
          </div> <!-- /.item -->
        </div> <!-- /.slider-container -->
      </div> <!-- /.slider -->
      <div class="panel-lead-float" role="aside">
        <form>
          <fieldset>
            <legend>Faça sua busca</legend>
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <input class="form-control" id="search" placeholder="Digite sua busca" pattern="[a-zA-Z0-9àáãâéêíóòõôúÀÁÃÂÉÊÍÓÒÕÔÚçÇ]+" type="search">
                    <label class="form-label" for="search" role="contentinfo">
                      <span>Buscar:</span>
                      <i class="material-icons success" aria-hidden="true">&#xe86c;</i>
                      <i class="material-icons error" aria-hidden="true">&#xe000;</i>
                    </label>
                    <span class="aux-effect" aria-hidden="true"></span>
                  </div> <!-- /.form-group -->
                </div> <!-- /.col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
              </div> <!-- /.row -->
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <label class="display-block mb-30 mt--15 small" aria-hidden="true">— busca avançada —</label>
                </div> <!-- /.col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
              </div> <!-- /.row -->
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <select class="form-control" id="marca" required>
                      <option selected value=""></option>
                      <option value="marca">Marca</option>
                    </select>
                    <label class="form-label" for="marca">
                      <span>Marca</span>
                    </label>
                    <span class="aux-effect" aria-hidden="true"></span>
                  </div> <!-- /.form-group -->
                </div> <!-- /.col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <select class="form-control" id="modelo" required>
                      <option selected value=""></option>
                      <option value="modelo">Modelo</option>
                    </select>
                    <label class="form-label" for="modelo">
                      <span>Modelo</span>
                    </label>
                    <span class="aux-effect" aria-hidden="true"></span>
                  </div> <!-- /.form-group -->
                </div> <!-- /.col-xs-12 col-sm-12 col-md-6 col-lg-6 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input class="form-control" id="yearFrom" placeholder=" " type="number">
                    <label class="form-label" for="yearFrom" role="contentinfo">
                      <span>Ano de:</span>
                      <i class="material-icons success" aria-hidden="true">&#xe86c;</i>
                      <i class="material-icons error" aria-hidden="true">&#xe000;</i>
                    </label>
                    <span class="aux-effect" aria-hidden="true"></span>
                  </div> <!-- /.form-group -->
                </div> <!-- /.col-xs-12.col-sm-6.col-md-6.col-lg-6 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input class="form-control" id="yearTo" placeholder=" " type="number">
                    <label class="form-label" for="yearTo" role="contentinfo">
                      <span>Ano até:</span>
                      <i class="material-icons success" aria-hidden="true">&#xe86c;</i>
                      <i class="material-icons error" aria-hidden="true">&#xe000;</i>
                    </label>
                    <span class="aux-effect" aria-hidden="true"></span>
                  </div> <!-- /.form-group -->
                </div> <!-- /.col-xs-12.col-sm-6.col-md-6.col-lg-6 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input class="form-control" id="priceFrom" placeholder=" " type="text">
                    <label class="form-label" for="priceFrom" role="contentinfo">
                      <span>Preço de:</span>
                      <i class="material-icons success" aria-hidden="true">&#xe86c;</i>
                      <i class="material-icons error" aria-hidden="true">&#xe000;</i>
                    </label>
                    <span class="aux-effect" aria-hidden="true"></span>
                  </div> <!-- /.form-group -->
                </div> <!-- /.col-xs-12.col-sm-6.col-md-6.col-lg-6 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <input class="form-control" id="priceTo" placeholder=" " type="text">
                    <label class="form-label" for="priceTo" role="contentinfo">
                      <span>Preço até:</span>
                      <i class="material-icons success" aria-hidden="true">&#xe86c;</i>
                      <i class="material-icons error" aria-hidden="true">&#xe000;</i>
                    </label>
                    <span class="aux-effect" aria-hidden="true"></span>
                  </div> <!-- /.form-group -->
                </div> <!-- /.col-xs-12.col-sm-6.col-md-6.col-lg-6 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                  <button class="button medium block primary-bg-color" type="reset">Limpar busca</button>
                </div> <!-- /.col-xs-12.col-sm-6.col-md-6.col-lg-6 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                  <button class="button medium block default-bg-color" type="submit">
                    <i class="material-icons" aria-hidden="true">&#xe8b6;</i>
                    <span>Buscar</span>
                  </button>
                </div> <!-- /.col-xs-12.col-sm-6.col-md-6.col-lg-6 -->
              </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
          </fieldset>
        </form>
      </div> <!-- /.panel-lead-float -->
    </section> <!-- /.slide-full -->
    <footer></footer>
  </main>
  <script async defer src="assets/js/custom.js" type="text/javascript"></script>
  <script async defer src="assets/js/home.js" type="text/javascript"></script>
  <noscript>O seu navegador atualmente não executa scripts. Os scripts são necessários para uma melhor experiência de navegação. Habilite em seu navegador o uso de scripts.</noscript>
</body>
</html>
