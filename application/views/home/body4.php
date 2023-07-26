<?php
$current_body = 'body4';
?>
<div id="acara-anda">
	<img class="title-img" src="<?php echo base_url() ?>assets/images/home_3.svg">
</div>
<!-- First Section -->
<div id="firstSectionContainer">
	<div class="form-group row eventFilterForm" style="margin-left:5%">
		<div class="col-sm-2 center">
			<label for="cat1" class="font-weight-bold col-form-label">Cari Event</label>
		</div>
		<div class="col-sm-2">
			<select class="btn btn-secondary btn-lg dropdown-toggle form-control eventFilterType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">
				<option class="dropdown-item form-control" value="name">Nama Acara</option>
				<option class="dropdown-item form-control" value="date">Jangka Waktu</option>
				<option class="dropdown-item form-control" value="type">Tipe</option>
				<option class="dropdown-item form-control" value="location">Lokasi</option>
			</select>
		</div>
		<div class="col-sm-4 eventFilterInputContainer">
			<input class="form-control eventNameFilter" type="text" placeholder="Nama Event">
			<input class="form-control eventLocFilter" type="text" placeholder="Lokasi Event">
			<select class="btn btn-secondary btn-lg dropdown-toggle form-control eventType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">
				<option class="dropdown-item form-control" value="Langsung">Langsung</option>
				<option class="dropdown-item form-control" value="Tidak Langsung">Tidak Langsung</option>
				<option class="dropdown-item form-control" value="Langsung & Tidak Langsung">Langsung & Tak Langsung</option>
			</select>
			<div class="row align-middle">
				<div class="col-sm-5">
					<input class="form-control eventDateStartFilter" type="date">
				</div>
				<div class="col-sm-1 hyphen" style="text-align: center;">
					-
				</div>
				<div class="col-sm-5">
					<input class="form-control eventDateEndFilter" type="date">
				</div>
			</div>
		</div>
		<label for="cat1" class="font-weight-bold col-form-label">Urutkan</label>
		<div class="col-sm-2">
			<select class="btn btn-secondary btn-lg dropdown-toggle form-control eventSortBy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">
				<option class="dropdown-item form-control" value="name-asc"><i class="bi bi-sort-alpha-down">Nama (A-Z)</i></option>
				<option class="dropdown-item form-control" value="date-asc"><i class="bi bi-sort-alpha-down">Tanggal (A-Z)</i></option>
				<option class="dropdown-item form-control" value="name-des"><i class="bi bi-sort-alpha-down-alt">Nama (Z-A)</i></option>
				<option class="dropdown-item form-control" value="date-des"><i class="bi bi-sort-alpha-down-alt">Tanggal (Z-A)</i></option>
			</select>
		</div>
		<div class="col-sm-1 center">
			<i class="btn btn-secondary bi bi-plus-lg firstSectionPlusFilter"> Filter</i>
		</div>
	</div>
</div>

<!-- Second Section -->
<div id="secondSection">
	<div class="secondSectionContainer" id="secondSectionContainer" style="display: none;">
		<!-- The content here is for the initial second section -->
		<div class="form-group row eventFilterForm" style="margin-left:5%">
			<div class="col-sm-2">
				<select class="btn btn-secondary btn-lg dropdown-toggle form-control eventFilterAndOr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">
					<option class="dropdown-item form-control" value="and">AND</option>
					<option class="dropdown-item form-control" value="or">OR</option>
				</select>
			</div>
			<div class="col-sm-2">
				<select class="btn btn-secondary btn-lg dropdown-toggle form-control eventFilterType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">
					<option class="dropdown-item form-control" value="name" >Nama Acara</option>
					<option class="dropdown-item form-control" value="date">Jangka Waktu</option>
					<option class="dropdown-item form-control" value="type">Tipe</option>
					<option class="dropdown-item form-control" value="location">Lokasi</option>
				</select>
			</div>

			<div class="col-sm-4 eventFilterInputContainer">
				<input class="form-control eventNameFilter" type="text" placeholder="Nama Event">
				<input class="form-control eventLocFilter" type="text" placeholder="Lokasi Event">
				<select class="btn btn-secondary btn-lg dropdown-toggle form-control eventType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium; ">
					<option class="dropdown-item form-control" value="Langsung">Langsung</option>
					<option class="dropdown-item form-control" value="Tidak Langsung">Tidak Langsung</option>
					<option class="dropdown-item form-control" value="Langsung & Tidak Langsung">Langsung & Tak Langsung</option>
				</select>
				<div class="row align-middle">
					<div class="col-sm-5">
						<input class="form-control eventDateStartFilter" type="date">
					</div>
					<div class="col-sm-1 hyphen" style="text-align: center;">
						-
					</div>
					<div class="col-sm-5">
						<input class="form-control eventDateEndFilter" type="date">
					</div>
				</div>
			</div>
			<div class="col-sm-1 float-start">
				<i class="btn btn-secondary bi bi-trash delete-button"> Delete</i>
			</div>
			<div class="col-sm-1 float-start">
				<i class="btn btn-secondary bi bi-plus-lg secondSectionPlusFilter"> Filter</i>
			</div>
		</div>
	</div>
</div>

<div id="builder"></div>

<script>
	// Initialize the Query Builder on the target element
	$('#builder').queryBuilder({
		filters: [
			// Define your filters here
			{
				id: 'eventName',
				label: 'Event Name',
				type: 'string',
				input: 'text',
				operators: ['equal', 'not_equal', 'begins_with', 'contains'],
			},
			{
				id: 'eventLocation',
				label: 'Event Location',
				type: 'string',
				input: 'text',
				operators: ['equal', 'not_equal', 'begins_with', 'contains'],
			},
			{
				id: 'eventType',
				label: 'Event Type',
				type: 'string',
				input: 'select',
				values: {
					'langsung': 'Langsung',
					'tidak-langsung': 'Tidak Langsung',
					'combi': 'Langsung & Tak Langsung',
				},
				operators: ['equal', 'not_equal'],
			},
			{
				id: 'eventDate',
				label: 'Event Date',
				type: 'date',
				input: 'date',
				operators: ['equal', 'not_equal', 'less', 'less_or_equal', 'greater', 'greater_or_equal'],
			},
		],
	});
</script>
<?php
$config = array(
	'base_url' => 'http://localhost/swakarya/' // Replace this with your actual base URL
);
?>

<!-- Display the events -->
<div class="row cont3" id="eventsContainer">
	<div class="card card-cust4 makeEvent">
		<img class="card-img-top card-head-cust1" src="<?php echo base_url() ?>/img/Events/common.png">
		<div class="card-body card-body-cust1 text-center">
			<h5 class="card-title font-weight-bold">Buat acara baru</h5>
			<p class="card-text">Buat acaramu dan ajak yang lain!</p>
			<a href="" class="btn font-weight-bold cust-button7 col-sm-9" style="color:#383E56">Cari Acara Lain </a>
			<p class="half-line">&nbsp;</p>
			<a href="<?php echo base_url() ?>index.php/homectl/createEvent" class="btn font-weight-bold cust-button7 col-sm-9" style="color:#383E56">Buat Acara Baru</a>
		</div>
	</div>
</div>
<br>