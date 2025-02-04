document.addEventListener("DOMContentLoaded", function() {
    const today = new Date().toISOString().split("T")[0];

    const dob = document.getElementById("dob");
    const start_date = document.getElementById("start_date");
    const end_date = document.getElementById("end_date");

    if (dob) dob.setAttribute("max", today);
    if (start_date) start_date.setAttribute("max", today);
    if (end_date) end_date.setAttribute("max", today);
});