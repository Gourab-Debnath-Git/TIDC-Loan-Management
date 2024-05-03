function calculateInterest() {
  var principal = parseFloat(document.getElementById('principal').value);
  var rate = parseFloat(document.getElementById('rate').value);
  var startDate = new Date(document.getElementById('start-date').value);
  var endDate = new Date(document.getElementById('end-date').value);

  var daysDiff = (endDate - startDate) / (1000 * 60 * 60 * 24); // Convert milliseconds to days
  var yearsDiff = daysDiff / 365;

  var interest = (principal * rate * yearsDiff) / 100;
  
  document.getElementById('result').innerHTML = 'Interest Accrued: ' + interest.toFixed(2);
}
function printProfile(){
  window.print();

}