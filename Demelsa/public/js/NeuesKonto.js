// SQL
var mysql = require('mysql');
var con = mysql.createConnection(
    {
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'colley'
    }
);

// Clientside Validierung
window.addEventListener("load", function() {

    document.querySelector("form").addEventListener("submit", function(evt) {

        var errors = false;
        var warnings = document.querySelectorAll(".warning");
        if (warnings != null) {
            warnings.forEach(element => {
                element.remove();
            });
        }

        if((document.querySelector('#kontoNr') != null) && (document.querySelector('#kontoName') != null) && (document.querySelector('#kontoZweck') != null))
        {
            if((document.querySelector('#kontoNr').value.trim() === '') && (document.querySelector('#kontoName').value.trim() === '') && (document.querySelector('#kontoZweck').value.length < 6))
            {
                document.getElementById('kontoNrError').innerHTML = 'Bitte geben Sie eine Kontonummer ein.';
                document.getElementById('kontoNameError').innerHTML = 'Bitte geben Sie einen Namen für das Konto ein.';
                document.getElementById('kontoZweckError').innerHTML = 'Bitte geben Sie einen Zweck für das Konto ein. Mindestlänge beträgt 6 Zeichen.';
                document.getElementById('Error').innerHTML = 'Fehler!';
                errors = true;
            }
            else
            {
                var kontoNr = document.querySelector('#kontoNr');
                var kontoName = document.querySelector('#kontoName');
                var kontoZweck = document.querySelector('#kontoZweck');
                con.connect(function(err)
                {
                    if (err) throw (err);
                    console.log('Connected');
                    var sql = 'INSERT INTO konto(kontoNr, kontoName, kontoZweck) VALUES (' + kontoNr + ', ' + kontoName + ', ' + kontoZweck + ')';
                    con.query(sql, function (err, result)
                    {
                        if(err) throw err;
                        console.log('1 record inserted');
                    });
                });
                
            }
        }
/*
        if (document.querySelector('#kontoNr') != null) {
            if (document.querySelector('#kontoNr').value.trim() === '') {
                document.getElementById('kontoNrError').innerHTML = "Bitte geben Sie eine Kontonummer ein.";
                errors = true;
            } else {
                document.getElementById('kontoNrError').innerHTML = "";
            }
        }

        if (document.querySelector('#kontoName') != null) {
            if (document.querySelector('#kontoName').value.trim() === '') {
                document.getElementById('kontoNameError').innerHTML = "Bitte geben Sie einen Titel ein.";
                errors = true;
            } else {

            }
        }
        if (document.querySelector('#kontoZweck').value.length < 6) {
            document.getElementById('kontoZweckError').innerHTML = "Bitte geben Sie einen Verwendungszweck ein.";
            errors = true;
        } else {
            document.getElementById('kontoZweckError').innerHTML = "";
        }
*/
        if (errors) {
            evt.preventDefault();
        }

    });
});