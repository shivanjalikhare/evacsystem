<?php echo $this->element('sidemenus\navbar_loggedin'); ?>

<html>

<head>
    <link href="/evacsystem/webroot/css/sidenavstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container marginbot-50 home-section color-dark bg-white">
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
    </script>

</body>

</html>