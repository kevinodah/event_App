async function myFunction() {
  var copyText = document.getElementById("myInput");
  // copyText.select();
  // copyText.setSelectionRange(0, 99999);
  // document.execCommand("copy");
  
  // var tooltip = document.getElementById("myTooltip");
  // tooltip.innerHTML = "Copied to clipboard: " + copyText.value;
    try {
      // 1) Copy text
      await navigator.clipboard.writeText(copyText.value);
      var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied to clipboard: " + copyText.value;
      // 2) Catch errors
    } catch (err) {
      console.error('Failed to copy: ', err);
    }
  
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy shareable link to clipboard";
}