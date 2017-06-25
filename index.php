<!-- Latest compiled and minified CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">



<title>Shop Manager</title>


<script>
    $(document).ready(function(){

        $('#bekijkproducten').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/edit.php?post_type=product';
        });

        $('#producttoevoegen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/post-new.php?post_type=product';
        });

        $('#productcategorieen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/edit-tags.php?taxonomy=product_cat&post_type=product';
        });

        $('#bekijkbestellingen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/edit.php?post_type=shop_order';
        });

        $('#kortingsbonnen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/edit.php?post_type=shop_coupon';
        });

        $('#rapporten').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-reports';
        });

        $('#algemeneopties').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-settings&tab=general';
        });

        $('#productinstellingen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-settings&tab=products';
        });

        $('#productweergave').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-settings&tab=products&section=display';
        });

        $('#voorraadinstellingen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-settings&tab=products&section=inventory';
        });

        $('#belastingen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-settings&tab=tax';
        });

        $('#verzendmethodes').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-settings&tab=shipping';
        });

        $('#betaalmogelijkheden').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-settings&tab=checkout';
        });

        $('#emailinstellingen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/admin.php?page=wc-settings&tab=email';
        });

        $('#bekijkpaginas').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/edit.php?post_type=page';
        });

        $('#paginatoevoegen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/http://localhost/cms/wp-admin/post-new.php?post_type=page';
        });

        $('#menusbekijken').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/nav-menus.php';
        });

        $('#mediabibliotheek').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/upload.php';
        });

        $('#mediauploaden').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/media-new.php';
        });

        $('#mediainstellingen').click('click', function() {
            var selectedSite = $( "#storeselect option:selected" ).text();
            window.location.href = 'http://' + selectedSite + '/wp-admin/options-media.php';
        });

        $('#head').click('click', function() {
            window.location.href = '';
        });

        $('.hover').hover(function(){
            $(this).css("background-color", "rgba(218, 218, 218, 0.42)");
        }, function(){
            $(this).css("background-color", "white");
        });

        $('#appinfo').hover(function(){
            $(this).css("color", "#9b608f");
        }, function(){
            $(this).css("color", "black");
        });

        $('#appinfo').click('click', function() {
           window.location.href = 'documentatie.php';
        });

    });
</script>

<div class="container">

	<div class="panel panel-default">
		<div class="panel-heading">
            <h3 class="panel-title head" id="head">Shop Manager for <img src="img/woo.png" style="width: 4%"></b></h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">

                            <div class="col-md-6">
								Selecteer webshop

								<i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>
                                    <b>
								<select id="storeselect">
									<option value="1"></option>
									<option value="2"></option>
									<option value="3"></option>
									<option value="4"></option>
									<option value="5"></option>
									<option value="6"></option>
									<option value="7"></option>
								</select>
                                    </b>

							</div>

                            <div class="col-md-6" style="text-align: right">

                                <div class="documentatie"> Documentatie
                                    <i class="fa fa-arrow-right fa-1x" aria-hidden="true"></i>
                                    <i class="fa fa-info-circle fa-2x" id="appinfo" style="margin-left:2px" aria-hidden="true"></i></div>

                            </div>

						</div>
					</div>
				</div>


				<h3><span class="label label-default">Productenbeheer</span></h3><br>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="bekijkproducten">
									<i class="fa fa-eye fa-3x" aria-hidden="true"></i> <br>

									Bekijk producten
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="producttoevoegen">
									<i class="fa fa-plus fa-3x" aria-hidden="true"></i><br>

									Product toevoegen
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="productcategorieen">
									<i class="fa fa-map-o fa-3x" aria-hidden="true"></i><br>

									Productcategorieen
								</div>
							</div>
						</div>

                <h3><span class="label label-default">Paginabeheer</span></h3><br>

                <div class="col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body hover" id="bekijkpaginas">
                            <i class="fa fa-etsy fa-3x" aria-hidden="true"></i> <br>

                            Bekijk pagina's
                        </div>
                    </div>
                </div>

                <div class="col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body hover" id="paginatoevoegen">
                            <i class="fa fa-plus-square fa-3x" aria-hidden="true"></i><br>

                            Pagina toevoegen
                        </div>
                    </div>
                </div>

                <div class="col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body hover" id="menusbekijken">
                            <i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i><br>

                            Menu's bekijken
                        </div>
                    </div>
                </div>

                <h3><span class="label label-default">Media</span></h3><br>

                <div class="col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body hover" id="mediabibliotheek">
                            <i class="fa fa-picture-o fa-3x" aria-hidden="true"></i> <br>

                            Mediabibliotheek
                        </div>
                    </div>
                </div>

                <div class="col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body hover" id="mediauploaden">
                            <i class="fa fa-upload fa-3x" aria-hidden="true"></i><br>

                            Media uploaden
                        </div>
                    </div>
                </div>

                <div class="col-md-4" >
                    <div class="panel panel-default">
                        <div class="panel-body hover" id="mediainstellingen">
                            <i class="fa fa-wrench fa-3x" aria-hidden="true"></i><br>

                            Media instellingen
                        </div>
                    </div>
                </div>






                <h3><span class="label label-default">Bestellingen</span></h3><br>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="bekijkbestellingen">
									<i class="fa fa-truck fa-3x" aria-hidden="true"></i> <br>

									Bekijk bestellingen
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="kortingsbonnen">
									<i class="fa fa-percent fa-3x" aria-hidden="true"></i><br>

									Kortingsbonnen
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="rapporten">
									<i class="fa fa-bar-chart-o fa-3x" aria-hidden="true"></i><br>

									Rapporten
								</div>
							</div>
						</div>

				<h3><span class="label label-default">Shop Instellingen</span></h3><br>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="algemeneopties">
									<i class="fa fa-window-restore fa-3x" aria-hidden="true"></i> <br>

									Algemene opties
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="productinstellingen">
									<i class="fa fa-cog fa-3x" aria-hidden="true"></i><br>

									Product Instellingen
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="productweergave">
									<i class="fa fa-list-alt fa-3x" aria-hidden="true"></i><br>

									Product weergave
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="voorraadinstellingen">
									<i class="fa fa-bars fa-3x" aria-hidden="true"></i><br>

									Voorraad instellingen
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="belastingen">
									<i class="fa fa-money fa-3x" aria-hidden="true"></i><br>

									Belastingen
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="verzendmethodes">
									<i class="fa fa-truck fa-3x" aria-hidden="true"></i><br>

									Verzendmethodes
								</div>
							</div>
						</div>

						<div class="col-md-4" >
							<div class="panel panel-default">
								<div class="panel-body hover" id="betaalmogelijkheden">
									<i class="fa fa-cc-visa fa-3x" aria-hidden="true"></i><br>

									Betaalmogelijkheden
								</div>
							</div>
						</div>


					<div class="col-md-4" >
						<div class="panel panel-default">
							<div class="panel-body hover" id="emailinstellingen">
								<i class="fa fa-envelope fa-3x" aria-hidden="true"></i><br>

								Email instellingen
							</div>
						</div>
					</div>

			</div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="col-md-12">2017 Shop Manager | designed for <img src="img/woo.png" style="width: 4%"> with <i class="fa fa-heart fa-1x" style="color:red;" aria-hidden="true"></i> by Joey Kheireddine
	</div>
</div>
