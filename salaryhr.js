function calculate() {
  var hrsworked = parseFloat(document.getElementById("hrsworked").value);
  var days = parseFloat(document.getElementById("days").value);
  var hrsover = parseFloat(document.getElementById("hrsover").value);
  var hrrate = parseFloat(document.getElementById("hrrate").value);
  var hall = parseFloat(document.getElementById("hall").value);
  var mall = parseFloat(document.getElementById("mall").value);
  var taxrate = parseFloat(document.getElementById("taxrate").value);
  var mpr = parseFloat(document.getElementById("mpr").value);
  var inr = parseFloat(document.getElementById("inr").value);
  var nssf = parseFloat(document.getElementById("nssf").value);
  var nhif = parseFloat(document.getElementById("nhif").value);
  var pension = parseFloat(document.getElementById("pension").value);
  var damages = parseFloat(document.getElementById("damages").value);
  var bankloanmi = parseFloat(document.getElementById("bankloanmi").value);
  var savings = parseFloat(document.getElementById("savings").value);
  var stdloan = parseFloat(document.getElementById("stdloan").value);
  var disability = parseFloat(document.getElementById("disability").value);
  
  let normal = hrrate * hrsworked * days;
  document.getElementById("normal").value = normal.toFixed(2);
  let overrate = 1.5 * hrrate;
  document.getElementById("overrate").value = overrate.toFixed(2);
  let overpay = overrate * hrsover;
  document.getElementById("overpay").value = overpay.toFixed(2);
  let basicpay = normal + overpay;
  document.getElementById("basicpay").value = basicpay.toFixed(2);
  let gpay = basicpay + hall + mall;
  document.getElementById("gpay").value = gpay.toFixed(2);
  
  let taxable = gpay - nssf;
  document.getElementById("taxable").value = taxable.toFixed(2);
  let tottax = taxable * (taxrate / 100);
  document.getElementById("tottax").value = tottax.toFixed(2);
  let paye= tottax - (mpr + inr );
  document.getElementById("paye").value = paye.toFixed(2);
  let totdeduc= paye+ nssf + nhif + pension + damages + bankloanmi + savings + stdloan + disability;
  document.getElementById("totdeduc").value = totdeduc.toFixed(2);
  let netsal=gpay-totdeduc;
  document.getElementById("netsal").value = netsal.toFixed(2);
  
  
}