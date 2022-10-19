une page avec dom
    .dom-content: page entier sans marge
    .page-new: nouvel page
    .dom-row: ligne 
    .dom-col-*: colonne dans dom-row
    .top-*: position top
    .left-*: position left
    .pad-bottom-*
    .pad-left-*
    .pad-rigth-*
    .pad-top-*
    .marg-bottom-*
    .marg-left-*
    .marg-rigth-*
    .marg-top-*
    .text-center

structure:                      * ---> |1 - 100| etoile = 1 à 100
    dom-content
        dom-row
            dom-col-*

            ___________________________________
            |dom_content                       |
            |                                  |
            |                                  |
            |                                  |
            |                                  |
            |                                  |
            |                                  |
            |                                  |
            |                                  |
            |                                  |
            |__________________________________|

exemple:

<div class="dom-content">
    <div class="dom-row">
            <div class="dom-col-1" style="background-color:green">test</div>
            <div class="dom-col-11 marg-bottom-50" style="background-color:red">test</div>
    </div>
    <div class="top-50 left-80">
        david
    </div>
    <div class="dom-row top-100 pad-top-100">
        <div class="dom-col-2" style="background-color:green">xxxx</div>
        <div class="dom-col-10" style="background-color:red">xxxxx</div>
    </div>
</div>