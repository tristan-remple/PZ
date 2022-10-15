function isClick() {
  alert("Clicked!");
}

function isDrag() {
  $(".dragzone").addClass("active");
}

function notDrag() {
  $(".dragzone").removeClass("active");
}

function dragging(event) {
  event.preventDefault();
}

function isDrop(event) {
  event.preventDefault();
  $(".dragzone").removeClass("active");
  
  const arrayFiles = [];
  $("#droptext").html("You are uploading the following files:<br>");
  
  if (event.dataTransfer.items) {
    // Use DataTransferItemList interface to access the file(s)
    for (let i = 0; i < event.dataTransfer.items.length; i++) {
      // If dropped items aren't files, reject them
      if (event.dataTransfer.items[i].kind === 'file') {
        const file = event.dataTransfer.items[i].getAsFile();
        arrayFiles.push(file);
        const fName = file.name+"<br>";
        const droptext = $("#droptext").html();
        $("#droptext").html(droptext+fName);
      }
    }
  }
  
  $("#files").val(arrayFiles);
}