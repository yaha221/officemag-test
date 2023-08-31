function getSelectionText() {
    var text = "";
    var activeEl = document.activeElement;
    var activeElTagName = activeEl ? activeEl.tagName.toLowerCase() : null;
    if (
      (activeElTagName == "textarea") || (activeElTagName == "input" &&
        /^(?:text|search|password|tel|url)$/i.test(activeEl.type)) &&
      (typeof activeEl.selectionStart == "number")
    ) {
      text = activeEl.value.slice(activeEl.selectionStart, activeEl.selectionEnd);
    } else if (window.getSelection) {
      text = window.getSelection().toString();
    }
    return text;
  }
  
    var saveText = function() {
      var selectionText = getSelectionText();
      if (confirm("Отправить сообщение ошибки?") && selectionText != null) {
        $.post("http://localhost:8081/local/php_interface/ErrorSender.php", selectionText, function (msg) {

        });
      }
      return;
    }
  
  function runOnKeys() {
    document.addEventListener('keydown', function(e) {
      if (e.ctrlKey && e.keyCode == 13) {
        saveText();
      }
    });
  }

  runOnKeys();