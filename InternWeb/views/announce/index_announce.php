<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div class="container">
            <div class = "container_title">
                <div class = "title">
                    ประกาศ
                </div>

                <div class = "search_container">
                    <span style="display: flex;">
                        <i class="fa-solid fa-magnifying-glass" style="font-size: 20; margin-top: 6px; margin-right: 5px; color:#777A83;"></i>
                        <input type="text">
                    </span>
                </div>
            </div>

            <div class="container_announce">
                <div class="card_announce">
                    <img src ="https://scontent.fbkk17-1.fna.fbcdn.net/v/t39.30808-6/305749505_174046908526077_1477526808224402629_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_ohc=05_N5SMEZegAX-6_W4v&_nc_ht=scontent.fbkk17-1.fna&oh=00_AT-s-S11gzqW112RmuQukVPjbH4h7zG4MaH5kNliyB6WJA&oe=634992C9"
                         style="border-radius: 10px 10px 0 0; width: 320px; height: 260px;">
                    <div class="card_announce_title">
                        บริษัท ไทย เอ็นเอส โซลูชั่น จำกัด
                    </div>
                    <div class="detail_container">
                        <div class="card_announce_detail">
                        วันและเวลา : วันพฤหัสบดีที่ 29 กันยายน 2565 เวลา 15.00-16.00 น.
                        สถานที่ : ห้อง E8403 ชั้น 4 อาคาร 8 กำหนดการ
                        15.00 - 15.30 น. บรรยายแนะนำบริษัทฯ (รวมการถาม-ตอบคำถามและแจกของรางวัล...
                        </div>
                    </div>
                    <a target="blank" href="https://www.facebook.com/ThaiNS.Solutions/">
                        <div class="detail_button">
                            <div class="detail_button_text">รายละเอียด</div>
                        </div>
                    </a>
                </div>

                <div class="card_announce">
                </div>
                <div class="card_announce">
                </div>
                <div class="card_announce">
                </div>
                <div class="card_announce">
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

.container_announce {
    width: 100%;
    height: fit-content;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;
}

.card_announce {
    width: 320px;
    height: 400px;
    margin-top: 20px;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 10px;
}

.card_announce:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card_announce_title {
    padding: 4px;
    font-size: 20px;
    font-weight: bold;
    color: black;
}

.detail_container {
    width: 300px;
    height: fit-content;
    margin: auto;
}

.card_announce_detail {
    font-size: 12px;
    color: #6A6E73;
    text-align: left;
    text-indent: 1.5em;
}

.detail_button {
    width: 70px;
    height: 22px;
    background-color: #1C6758;
    margin-left: calc(100% - 80px);
    border-radius: 10px;
    cursor: pointer;
}

.detail_button:hover {
    background-color: #144b40;
}

.detail_button_text {
    font-size: 11px; 
    font-weight: bold; 
    color: white; 
    padding: 3px;
    cursor: pointer;
}


</style>
</html>