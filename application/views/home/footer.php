<?php $current_body = 'footer'; ?>
<div class="push"></div>

</div>

<footer class="footer flex-shrink-0 cust-footer">
	<div class="container cust-footer">
		<br>
		<div class="row cust-footer">
			<div class="col-lg-4 col-md-6 cust-footer">
				<h5>Kawan Imba</h5>
				<p class="small">Sebuah kelompok mahasiswa yang ingin membantu usaha UMKM dalam mengikuti perkembangan teknologi.</p>
			</div>
			<div class="col-lg-2 col-md-6 cust-footer">
				<h5 class="text-white mb-3">Bisnis Anda</h5>
				<ul class="list-unstyled text-muted small">
					<li><a class="cust-link" href="<?php echo base_url() ?>index.php/homectl">Profil Bisnis Anda</a></li>
					<li><a class="cust-link" href="<?php echo base_url() ?>index.php/homectl">Lihat Dashboard</a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-md-6 cust-footer">
				<h5 class="text-white mb-3">Acara</h5>
				<ul class="list-unstyled text-muted small">
					<li><a class="cust-link" href="<?php echo base_url() ?>index.php/homectl/#acara-anda">Acara Anda</a></li>
					<li><a class="cust-link" href="<?php echo base_url() ?>index.php/homectl/viewTheEvents">Cari Acara</a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-md-6 cust-footer">
				<h5 class="text-white mb-3">Ikuti Kami</h5>
				<ul class="list-unstyled text-muted small">
					<li><a class="cust-link" href="">Instagram</a></li>
					<li><a class="cust-link" href="">Twitter</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php
$config = array(
	'base_url' => 'http://localhost/swakarya/' // Replace this with your actual base URL
);
?>
<?php
$events = []; // Initialize an empty array to store events
if ($this->output->get_output() && strpos($this->output->get_output(), 'firstSectionContainer') !== false) {
	if (sizeof($other_events) > 0) {
		foreach ($other_events as $item) {
			$event = [
				'event_name' => $item['event_name'],
				'event_date_start' => date('d-m-Y', strtotime($item['event_date_start'])),
				'event_date_end' => date('d-m-Y', strtotime($item['event_date_end'])),
				'event_type' => $this->CI->getEvType($item['event_type']),
				'event_loc' => $item['event_loc'],
				'event_id' => $item['event_id'],
				'event_pic' => base_url() . '/img/Events/' . $item['event_pic'],
			];
			$events[] = $event;
		}
	}
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jQuery-QueryBuilder/dist/js/query-builder.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	$(function() {
		$(".datepicker").datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			todayHighlight: true,
		});
	});
</script>
<script>
	var base_url = <?php echo json_encode($config['base_url']); ?>;
</script>
<?php if (!empty($events)) { ?>
	<script>
		var allEvents = <?php echo json_encode($events); ?>;
	</script>
<?php } ?>
<script>
	$(document).ready(function() {
		var secondSectionTemplate = `
		<div class="secondSectionContainer" id="secondSectionContainer">
		<div class="form-group row eventFilterForm" style="margin-left:5%">
			<div class="col-sm-2">
				<select class="btn btn-secondary btn-lg dropdown-toggle form-control eventFilterAndOr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">
					<option class="dropdown-item form-control" value="and">AND</option>
					<option class="dropdown-item form-control" value="or">OR</option>
				</select>
			</div>
			<div class="col-sm-2">
				<select class="btn btn-secondary btn-lg dropdown-toggle form-control eventFilterType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Amiko'; font-size:medium;">
					<option class="dropdown-item form-control" value="name" selected>Nama Acara</option>
					<option class="dropdown-item form-control" value="date">Jangka Waktu</option>
					<option class="dropdown-item form-control" value="type">Tipe</option>
					<option class="dropdown-item form-control" value="location">Lokasi</option>
				</select>
			</div>

			<div class="col-sm-4 eventFilterInputContainer">
				<input class="form-control eventNameFilter" type="text" placeholder="Nama Event" >
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
`;
		var sectionIndex = 1;
		var filterCondition = "and"; // Default "and"

		$(".eventFilterAndOr").on("change", function() {
			filterCondition = $(this).val();
			filterAndSortEvents();
		});

		$(".firstSectionPlusFilter").on("click", function() {
			$("#secondSectionContainer").show();
			$("#secondSectionContainer .eventFilterForm .eventFilterType").val("name").trigger("change");
		});

		$(document).on("click", ".secondSectionPlusFilter", function() {
			var cloneContainer = $("#secondSectionContainer").clone(); // Clone the entire container
			sectionIndex++;
			cloneContainer.attr("id", "secondSectionContainer" + sectionIndex); // Update the ID to make it unique
			cloneContainer.find(".eventFilterForm").each(function() {
				updateInputIDs($(this), sectionIndex);
			});
			$("#secondSection").append(cloneContainer); // Append the cloned container to the #secondSection
		});

		$(document).on("click", ".delete-button", function() {
			var container = $(this).closest(".secondSectionContainer");
			if ($("#secondSection .eventFilterForm").length > 1) {
				container.remove();
				filterAndSortEvents();
			}
		});

		$(document).on("change", ".eventFilterForm .eventFilterType", function() {
			updateFilterInputs($(this));
			filterAndSortEvents();
		});

		$("#eventFilterForm input, #eventTypeFilter, #eventSortBy, #eventSortOrder").on("change keyup", function() {
			filterAndSortEvents();
		});
		$("#firstSectionContainer .eventFilterInputContainer input, #firstSectionContainer .eventFilterInputContainer select, #secondSectionContainer .eventFilterInputContainer input, #secondSectionContainer .eventFilterInputContainer select, #eventTypeFilter, #eventSortBy, #eventSortOrder").on("change input", function() {
			filterAndSortEvents();
		});

		$(document).on("change", ".secondSectionContainer .eventFilterType, .secondSectionContainer input, .secondSectionContainer select", function() {
			var clonedContainer = $(this).closest(".secondSectionContainer");
			updateFilterInputs(clonedContainer);
			filterAndSortEvents();
		});

		updateFilterInputs($("#firstSectionContainer .eventFilterForm .eventFilterType"));
		filterAndSortEvents();
	});

	function updateFilterInputs(filterTypeElement) {
		var selectedType = filterTypeElement.val() || "name";
		var filterInputContainer = filterTypeElement.parent().siblings(".eventFilterInputContainer");
		filterInputContainer.find("input, select").hide().removeAttr("required").val("");

		if (selectedType === "name") {
			filterInputContainer.find(".eventNameFilter").show().attr("required", "required");
			filterInputContainer.find(".hyphen").hide();
		} else if (selectedType === "date") {
			filterInputContainer.find(".eventDateStartFilter, .eventDateEndFilter").show().attr("required", "required");
			filterInputContainer.find(".hyphen").show();
		} else if (selectedType === "type") {
			filterInputContainer.find(".eventType").show().attr("required", "required");
			filterInputContainer.find(".hyphen").hide();
		} else if (selectedType === "location") {
			filterInputContainer.find(".eventLocFilter").show().attr("required", "required");
			filterInputContainer.find(".hyphen").hide();
		}

		// Handle cloned forms
		$("#secondSectionContainer .eventFilterForm:not(:first-child)").each(function() {
			var clonedType = $(this).find(".eventFilterType").val() || "name"; // Set default value to "name" if no value is selected
			var clonedInputContainer = $(this).find(".eventFilterInputContainer");
			clonedInputContainer.find("input, select").hide().removeAttr("required").val("");

			if (clonedType === "name") {
				clonedInputContainer.find(".eventNameFilter").show().attr("required", "required");
				clonedInputContainer.find(".hyphen").hide();
			} else if (clonedType === "date") {
				clonedInputContainer.find(".eventDateStartFilter, .eventDateEndFilter").show().attr("required", "required");
				clonedInputContainer.find(".hyphen").show();
				clonedInputContainer.find(".eventType").show().attr("required", "required");
				clonedInputContainer.find(".hyphen").hide();
			} else if (clonedType === "location") {
				clonedInputContainer.find(".eventLocFilter").show().attr("required", "required");
				clonedInputContainer.find(".hyphen").hide();
			}
		});
	}


	function clearFilterInputs(formGroup) {
		formGroup.find("input[type='text'], input[type='date']").each(function() {
			$(this).val("");
		});
	}

	function updateInputIDs(clone, sectionIndex) {
		clone.find("input[type='text'], input[type='date']").each(function() {
			var originalID = $(this).attr("id");
			var newID = originalID + "-" + sectionIndex;
			$(this).attr("id", newID);
		});
	}


	function getFilterValue(filterForm) {
		var filterValues = filterForm.find(".eventFilterInputContainer input:visible, .eventFilterInputContainer select:visible").map(function() {
			return $(this).val();
		}).get();
		var filterValue = filterValues.length > 1 ? filterValues.join("|") : filterValues[0];

		console.log(filterValue)
		return filterValue;
	}


	function filterAndSortEvents() {
		console.log("filterAndSortEvents() called.");
		var firstSectionFilter = $("#firstSectionContainer .eventFilterForm");
		var firstSectionFilterType = firstSectionFilter.find(".eventFilterType").val();

		// Collect values from all relevant input elements
		var filterValues = firstSectionFilter.find(".eventFilterInputContainer input:visible, .eventFilterInputContainer select:visible").map(function() {
			return $(this).val();
		}).get();

		// Check if there is more than one value, then join using a delimiter (e.g., a pipe "|")
		var filterValue = filterValues.length > 1 ? filterValues.join("|") : filterValues[0];

		// Retrieve the selected filter condition from the dropdown in the second section
		var secondSectionFilterCondition = $("#secondSectionContainer .eventFilterAndOr").val();
		console.log("Second section filterCondition:", secondSectionFilterCondition);

		// Apply filtering based on the input in the first section
		var filteredEventsFirstSection = filterEvents(firstSectionFilterType, filterValue);
		console.log("Filtered events after first section filtering:", filteredEventsFirstSection);

		// Apply filtering based on the input in the second section
		var filteredEventsSecondSection = [];
		if ($("#secondSectionContainer").is(":visible")) {
			console.log("Inside the loop");
			$(".secondSectionContainer .eventFilterForm").each(function() {
				var secondSectionFilterCondition = $("#secondSectionContainer .eventFilterAndOr").val();
				var filterTypeElement = $(this).find(".eventFilterType");
				var filterType = filterTypeElement.val();
				var filterValue = getFilterValue($(this));
				console.log("Filter condition:", secondSectionFilterCondition);
				console.log("Filter type:", filterType);
				console.log("Filter value:", filterValue);
				var filteredEvents = filterEvents(filterType, filterValue);
				console.log("Filtered Events:", filteredEvents);
				filteredEventsSecondSection.push([filteredEvents]); // Wrap the filteredEvents array in another array
			});

		}
		console.log("Filtered events from second section:", filteredEventsSecondSection);

		// Flatten the array of arrays in filteredEventsSecondSection
		filteredEventsSecondSection = filteredEventsSecondSection.flat();

		// Perform AND or OR filtering based on the selected filter condition
		var filteredEvents;
		if (secondSectionFilterCondition === "and") {
			filteredEvents = applyANDFilter(filteredEventsFirstSection, filteredEventsSecondSection);
		} else {
			filteredEvents = applyORFilter(filteredEventsFirstSection, filteredEventsSecondSection);
		}
		console.log("Final filtered events:", filteredEvents);

		// Save the specific card with class "card-cust4" before clearing all the event cards
		var specificCard = $("#eventsContainer").find(".makeEvent");
		$("#eventsContainer").empty();
		$("#eventsContainer").append(specificCard);

		filteredEvents.forEach(function(event) {
			var eventCardHTML = `
            <div class="card card-cust4">
                <img class="card-img-top card-head-cust1" src="${event.event_pic}" alt="${event.event_name}">
                <div class="card-body card-body-cust1 text-center">
                    <h5 class="card-title font-weight-bold">${event.event_name}</h5>
                    <p class="card-text">
                        ${event.event_date_start} - ${event.event_date_end}<br>
                        ${event.event_type}<br>
                        ${event.event_loc}
                    </p>
                    <a href="${base_url + 'index.php/homectl/specificEvent/' + event.event_id}" class="btn font-weight-bold cust-button7" style="color:#383E56">Lihat Detail</a>
                </div>
            </div>
        `;
			$("#eventsContainer").append(eventCardHTML);
		});
	}


	function filterEvents(filterType, filterValue) {
		console.log("filterType:", filterType);
		console.log("filterValue:", filterValue);
		var events = allEvents;
		// console.log(events);
		var filteredEvents = events.filter(function(event) {
			if (filterType === "name" && event.event_name.includes(filterValue)) {
				return true;
			} else if (filterType === "type" && (!filterValue || event.event_type === filterValue)) {
				return true;
			} else if (filterType === "location" && event.event_loc.includes(filterValue)) {
				return true;
			} else if (filterType === "date") {
				var filterValues = filterValue.split("|");
				var startDate = filterValues[0];
				var endDate = filterValues[1];
				if (startDate && endDate) {
					return event.event_date_start >= startDate && event.event_date_start <= endDate;
				} else if (startDate) {
					return event.event_date_start >= startDate;
				} else if (endDate) {
					return event.event_date_end <= endDate;
				} else {
					return true;
				}
			}
			return false;
		});
		return filteredEvents;
	}

	function applyANDFilter(eventsFirstSection, eventsSecondSection) {
		var filteredEvents = eventsFirstSection;
		for (var i = 0; i < eventsSecondSection.length; i++) {
			// console.log("Filtering with eventsSecondSection[" + i + "]:", eventsSecondSection[i]);
			filteredEvents = filteredEvents.filter(function(event) {
				// Check if the event is present in eventsSecondSection[i]
				return eventsSecondSection[i].some(function(eventInSecondSection) {
					return eventInSecondSection.event_id === event.event_id;
				});
			});
			// console.log("Filtered events after iteration " + i + ":", filteredEvents);
		}
		return filteredEvents;
	}

	function applyORFilter(eventsFirstSection, eventsSecondSection) {
		console.log("Applying OR filter...");
		var filteredEvents = eventsFirstSection;
		for (var i = 0; i < eventsSecondSection.length; i++) {
			for (var j = 0; j < eventsSecondSection[i].length; j++) {
				var eventInSecondSection = eventsSecondSection[i][j];
				var isEventAlreadyIncluded = filteredEvents.some(function(event) {
					return event.event_id === eventInSecondSection.event_id;
				});

				if (!isEventAlreadyIncluded) {
					filteredEvents.push(eventInSecondSection);
				}
			}
		}
		return filteredEvents;
	}
</script>
</body>

</html>