une page avec dom
    <div>.dom-content: page entier sans marge</div>
    <div>.page-new: nouvel page</div>
    <div>.dom-row: ligne </div>
    <div>.dom-col-*: colonne dans dom-row</div>
    <div>.top-*: position </div>
    <div>.left-*: position left</div>
    <div>.pad-bottom-</div>*
    <div>.pad-left-*</div>
    <div>.pad-rigth-*</div>
    <div>.pad-top-*</div>
    <div>.marg-bottom-*</div>
    <div>.marg-left-*</div>
    <div>.marg-rigth-*</div>
    <div>.marg-top-*</div>
    <div>.text-center</div>

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
