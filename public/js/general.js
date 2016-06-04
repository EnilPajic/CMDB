function Banuj (id, name, da)
{
    var FD = new FormData();
    FD.append("id", id);
    var urlic = da ===  true ? "korisnik/banuj" : "korisnik/unbanuj";
    $.ajax(
        {

            url: urlic,
            type: 'POST',
            processData: false,
            contentType: false,
            data: FD,
            success: function (r) {
                var o = JSON.parse (r);
                if (o.ok === "1")
                {
                    alert("Akcija za korisnika '" + name + "' uspjesno zavrsena! " + (da == true ? "(Banovanje)" : "(Unbanovanje)"));
                    location.reload();
                }
                else alert ("Greska: " + o.msg);
            },
            error: function () {
                alert ('Greska prilikom pokusaja (un)banovanja. Ne mogu pronaći rutu');
            }

        });
}