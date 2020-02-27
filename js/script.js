

$(document).ready(function() {
    $("button").click(function () {
        $.ajax({
            url: "php/cobdd.php",
            success: function (requete) {
                $('.zone_citation').html(requete);
            }
        })
    })
})

/*
        }).fail(function (err) {
            $("zone_citation").html(err);
            console.log(err);
        });
    });
});*/