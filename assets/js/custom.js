$(function () {
	$(".datepicker").datepicker({
		format: "yyyy-mm-dd",
		autoclose: true,
		todayHighlight: true,
	});
});

$(document).ready(function () {
	// Attach event listener to the filter type select element
	$("#eventFilterInputContainer").on("change", function () {
		showFilterInputs();
		filterAndSortEvents();
	});

	// Attach event listeners to the existing filter and sorting elements
	$(
		"#eventFilterForm input, #eventTypeFilter, #eventSortBy, #eventSortOrder"
	).on("change keyup", function () {
		filterAndSortEvents();
	});

	// Initialize with all events visible and sorted by name in ascending order
	showFilterInputs();
	filterAndSortEvents();
});

function showFilterInputs() {
	var selectedType = $("#eventFilterType").val();
	$("#eventFilterInputContainer input").hide();
	if (selectedType === "name") {
		$("#eventNameFilter").show();
	} else if (selectedType === "date") {
		$("#eventDateStartFilter, #eventDateEndFilter").show();
	}
	// Add more conditions for other filter types if needed
}
