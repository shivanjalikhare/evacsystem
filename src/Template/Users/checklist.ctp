<<<<<<< HEAD
<?php echo $this->element('sidemenus\navbar_loggedin'); ?>

<html>
=======

<?php echo $this->element('sidemenus\side_menu_logged_in'); ?>

<html>
<head>
<style>
body {
  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ol {
  margin: 0;
  padding: 0;
  list-style-type: none;
    
}

/* Style the list items */
ol li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ol li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ol li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ol li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ol li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #f44336;
  padding: 30px 40px;
  color: white;
  text-align: center;
}
>>>>>>> 111e24a285a3d0c58655b845951e2d00a2b2b4f9

<head>
    <link href="/evacsystem/webroot/css/sidenavstyle.css" rel="stylesheet" type="text/css">
</head>
<<<<<<< HEAD

<body>
    <div id="container marginbot-50">
        <div id="myDIV" class="header">
            <h2 style="margin:5px">Emergency Checklist</h2>
            <input type="text" id="myInput" placeholder="Remind me..">
            <span onclick="newElement()" class="addBtn">Add</span>
        </div>

        <ol id="myUL">
            <li class="myULID">Take Medicines</li>
            <li class="myULID">Credit cards, Passport and other Documents</li>
            <li class="myULID">Special items for infants, elderly or disabled family members.</li>
            <li class="myULID">Blankets or sleeping bags</li>
            <li class="myULID">A change of clothing, rain gear and sturdy shoes</li>
            <li class="myULID">emergency telephone numbers</li>
        </ol>
    </div>

    <script>
        // Create a "close" button and append it to each list item
        var myNodelist = document.getElementsByClassName("myULID");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            myNodelist[i].appendChild(span);
        }

        // Click on a close button to hide the current list item
        var close = document.getElementsByClassName("close");
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }

        // Add a "checked" symbol when clicking on a list item
        var list = document.querySelector('ul');
        list.addEventListener('click', function(ev) {
            if (ev.target.tagName === 'LI') {
                ev.target.classList.toggle('checked');
            }
        }, false);

        // Create a new list item when clicking on the "Add" button
        function newElement() {
            var li = document.createElement("li");
            var inputValue = document.getElementById("myInput").value;
            var t = document.createTextNode(inputValue);
            li.appendChild(t);
            if (inputValue === '') {
                alert("You must write something!");
            } else {
                document.getElementById("myUL").appendChild(li);
            }
            document.getElementById("myInput").value = "";

            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            li.appendChild(span);

            for (i = 0; i < close.length; i++) {
                close[i].onclick = function() {
                    var div = this.parentElement;
                    div.style.display = "none";
                }
            }
        }
=======
<body>
  <div id ="content-wrapper">
    <div id="myDIV" class="header">
      <h2 style="margin:5px">Emergency Checklist</h2>
      <input type="text" id="myInput" placeholder="Remind me..">
      <span onclick="newElement()" class="addBtn">Add</span>
    </div>

    <ol id="myUL">
        <li>Take Medicines</li>
        <li>Credit cards, Passport and other Documents</li>
        <li>Special items for infants, elderly or
      disabled family members.</li>
        <li>Blankets or sleeping bags</li>
        <li>A change of clothing, rain gear and
      sturdy shoes</li>
        <li>emergency telephone numbers</li>
    </ol>
  </div>

    <script>
      // Create a "close" button and append it to each list item
      var myNodelist = document.getElementsByTagName("LI");
      var i;
      for (i = 0; i < myNodelist.length; i++) {
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        myNodelist[i].appendChild(span);
      }

      // Click on a close button to hide the current list item
      var close = document.getElementsByClassName("close");
      var i;
      for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
          var div = this.parentElement;
          div.style.display = "none";
        }
      }

      // Add a "checked" symbol when clicking on a list item
      var list = document.querySelector('ul');
      list.addEventListener('click', function(ev) {
        if (ev.target.tagName === 'LI') {
          ev.target.classList.toggle('checked');
        }
      }, false);

      // Create a new list item when clicking on the "Add" button
      function newElement() {
        var li = document.createElement("li");
        var inputValue = document.getElementById("myInput").value;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
          alert("You must write something!");
        } else {
          document.getElementById("myUL").appendChild(li);
        }
        document.getElementById("myInput").value = "";

        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        li.appendChild(span);

        for (i = 0; i < close.length; i++) {
          close[i].onclick = function() {
            var div = this.parentElement;
            div.style.display = "none";
          }
        }
      }
>>>>>>> 111e24a285a3d0c58655b845951e2d00a2b2b4f9
    </script>

</body>

</html>