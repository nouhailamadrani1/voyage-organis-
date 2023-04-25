<!DOCTYPE html>
<html>
<head>
	<title>View Ticket</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body  style="background: #00235B">
	<div class="container d-flex  justify-content-center ">
		<div class="card bg-light  col-md-8">
			<div class="card-body  ">
	<div class="d-flex  justify-content-between">			
        <img src="logo.png" alt="" style="width: 50px ; hight: 50px ; ">
        <h6 class="text-danger">Ticket :Voyage a {{$reservation->pour}}</h6>
    </div>
				<div class="row d-flex  justify-content-center">
					<div class="col-md-4">
						<p class="font-weight-bold">Nom:</p>
						
						<p class="font-weight-bold">Email:</p>
						<p class="font-weight-bold">Hotel:</p>
						<p class="font-weight-bold">Pays:</p>
						<p class="font-weight-bold">De puis:</p>
						<p class="font-weight-bold">Pour:</p>
						<p class="font-weight-bold">Date de départ:</p>
						<p class="font-weight-bold">Date de l'arrivee:</p>
						<p class="font-weight-bold">Heure de départ:</p>
						<p class="font-weight-bold">Heure de l'arrivee:</p>
						<p class="font-weight-bold">Prix Totale:</p>
					</div>
					<div class="col-md-4">
						<p>{{ $reservation->clientNom }}</p>
						<p>{{ $reservation->clientEmail }}</p>
						<p>{{ $reservation->hotel_nom }}</p>
						<p>{{ $reservation->pays }}</p>
						<p>{{ $reservation->depuis }}</p>
						<p>{{ $reservation->pour }}</p>
						<p>{{ $reservation->date_de_départ }}</p>
						<p>{{ $reservation->date_arrivee }}</p>
						<p>{{ $reservation->heure_de_départ }}</p>
						<p>{{ $reservation->heure_arrivee }}</p>
						<p>{{ $reservation->prix_totale }} Dh</p>
					</div>
				</div>
				<div class="text-center ">
					<button class="btn btn-warning"  onclick="printTicket()">Print Ticket</button>
				</div>
			</div>
		</div>
	</div>
    <script>
        function printTicket() {
          window.print();
        }
        </script>
</body>
</html>