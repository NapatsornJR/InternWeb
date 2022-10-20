<!DOCTYPE html>
<html>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">
    
    <body>
        <div class = "container">
            <div class = "container_title">
                <div class = "title">
                    เอกสาร
                </div>

                <div class = "search_container">
                    <span style="display: flex;">
                        <i class="fa-solid fa-magnifying-glass" style="font-size: 20; margin-top: 6px; margin-right: 5px; color:#777A83;"></i>
                        <input type="text">
                    </span>
                </div>
            </div>

            <div class = "container_doc">
                <div class = "card_doc">
                    <div class = "card_doc_title">
                        แบบคำร้องขอสหกิจศึกษา
                    </div>
                    <img class="pdf_logo" src="img/pdf.png">
                    <div class = "card_doc_detail">
                        Date : 29/09/2022
                        Size : 125 KB 
                    </div>
                    <div class = "download_button">
                        <div class = "download_text">
                            ดาวน์โหลด
                        </div>
                    </div>
                </div>
                <div class = "card_doc">
                </div>
                <div class = "card_doc">
                </div>
                <div class = "card_doc">
                </div>
                <div class = "card_doc">
                </div>
                <div class = "card_doc">
                </div>

            </div>
        </div>
    </body>

<style>

body {
    background-color: #F2F2F2;
}

.title {
    color: #585D66;
    font-size: 25px;
    font-weight: bold;
    text-align: left;
    height: fit-content;
}

.container {
    width: calc(100% - 240px);
    height: calc(100% - 100px);
    margin-left: 205px;
    margin-top: 100px;
    display: flex;
    flex-direction: column;
}

.container_doc {
    width: 100%;
    height: 450px;
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;
}

.container_title {
    display: flex;
    justify-content: space-between;
    width: calc(100% - 15px);
    height: fit-content;
}

.search_container {
    height: fit-content;
    width: fit-content;
    margin-left: 68%;
    margin-top: 5px;
}

input {
    height: 4vh;
    width: 16.8vw;
    border-left-style: none;
    border-right-style: none;
    border-top-style: none;
    border-bottom-style: solid;
    border-color: #777A83;
    background-color: #f2f2f2;
}

input:focus-visible {
    outline: none;
}

.card_doc {
    width: 220px;
    height: 180px;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-style: solid;
    border-color: #BBBDC1;
    border-width: 0.5px;
}

.card_doc:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card_doc_title {
    text-align: center;
    color: black;
    font-size: 16px;
    font-weight: bold;
    margin-top: 10px;
}

.card_doc_detail {
    font-size: 12px;
    color: grey;
    text-align: left;
    margin-top: 30px;
}

.download_button {
    width: 196px;
    height: 30px;
    background-color: #CC4B4C;
    margin-top: 40px;
    margin-left: 10px;
    cursor: pointer;
}

.download_button:hover {
    background-color: #b03233;
}

.download_text {
    font-weight: bold;
    font-size: 16px;
    color: white;
    padding: 3;
}

.pdf_logo {
    width: 75px;
    height: 75px;
    float: left;
    padding: 14px;
}
        
</style>

</html>