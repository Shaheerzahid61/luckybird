<template>
    <div class="tabs">
        <div class="faq-tabs mt-4">
            <div
                v-for="(tab, index) in tabTitles"
                :key="index"
                :class="['faq-tab', { active: currentTab === index }]"
                @click="currentTab = index"
            >
                {{ tab }}
            </div>
        </div>

        <div v-if="currentTab === 0" class="tab-content">
            <!-- Hour Contest Content -->
            <div class="muneeb">
                <h2 class="big-win">Biggest Win Weekly</h2>
            </div>
            <div class="container d-flex">
                <div class="col-md-3 first-table-image get">
                    <div class="player-name-section">
                        <p class="player-name">Hidden</p>
                    </div>
                    <p class="pay-id">Play ID:</p>
                    <p class="id-num">7317317284</p>
                    <div class="r_bot tw-bg-blue-700 tw-rounded-1">
                        <div>
                            <span class="v_middle tw-text-blue-250"
                                >Multiplier</span
                            ><span
                                title="871.96x"
                                class="v_middle tw-truncate tw-max-w-[10ch]"
                                >871.96x</span
                            >
                        </div>
                        <div>
                            <span class="v_middle tw-text-blue-250">Result</span
                            ><span class="tw-whitespace-nowrap"
                                ><img
                                    src=""
                                    alt="btc svg"
                                    class="v_middle"
                                /><span
                                    title="21799.0000"
                                    class="v_middle tw-truncate tw-max-w-[12ch]"
                                    >21799.0000</span
                                ></span
                            >
                        </div>
                    </div>
                </div>

                <div class="col-md-3 Second-table-image get"></div>
                <div class="col-md-3 third-table-image get"></div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr class="first">
                        <th scope="col">Rank</th>
                        <th scope="col">User</th>
                        <th scope="col">Score</th>
                        <th scope="col">Estimated Prize</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="second">
                        <td>
                            <img
                                src="\image\new\image-removebg-preview.png"
                                alt=""
                                class="1-2-3"
                            />
                        </td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />Hidden
                        </td>
                        <td>3723.6162</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />18.0799
                        </td>
                    </tr>
                    <tr class="first">
                        <td>
                            <img
                                src="\image\new\image-removebg-preview (2).png"
                                alt=""
                                class="1-2-3"
                            />
                        </td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />Hidden
                        </td>
                        <td>1737.5222</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />7.5333
                        </td>
                    </tr>
                    <tr class="second">
                        <td>
                            <img
                                src="\image\new\image-removebg-preview (1).png"
                                alt=""
                                class="1-2-3"
                            />
                        </td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />Codymw187
                        </td>
                        <td>1089.8372</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />4.5200
                        </td>
                    </tr>
                    <tr class="first">
                        <td>4th</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />Hidden
                        </td>
                        <td>466.7594</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />2.3000
                        </td>
                    </tr>
                    <tr class="second">
                        <td>5th</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />BigDthunder
                        </td>
                        <td>441.7400</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />1.8000
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div v-if="currentTab === 1" class="tab-content">
            <!-- Daily Contest Content -->
            <table class="table table-striped">
                <thead>
                    <tr class="first">
                        <th scope="col">Rank</th>
                        <th scope="col">User</th>
                        <th scope="col">Score</th>
                        <th scope="col">Estimated Prize</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="second">
                        <td>
                            <img
                                src="\image\new\image-removebg-preview.png"
                                alt=""
                                class="1-2-3"
                            />
                        </td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />
                            DailyMaster
                        </td>
                        <td>5820.9921</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />25.3412
                        </td>
                    </tr>
                    <tr class="first">
                        <td>
                            <img
                                src="\image\new\image-removebg-preview (2).png"
                                alt=""
                                class="1-2-3"
                            />
                        </td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />Hidden
                        </td>
                        <td>4901.2213</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />20.1187
                        </td>
                    </tr>
                    <tr class="second">
                        <td>
                            <img
                                src="\image\new\image-removebg-preview (1).png"
                                alt=""
                                class="1-2-3"
                            />
                        </td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />Legendary
                        </td>
                        <td>4590.2831</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />18.0045
                        </td>
                    </tr>
                    <tr class="first">
                        <td>4th</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />Hidden
                        </td>
                        <td>4120.1234</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />15.7682
                        </td>
                    </tr>
                    <tr class="second">
                        <td>5th</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/image/head/headPortrait_4.png"
                                class="rounded-circle avatar mr-2"
                                alt=""
                            />TopPlayer
                        </td>
                        <td>3980.5678</td>
                        <td class="d-flex">
                            <img
                                src="https://luckybird.io/img/usd.png"
                                alt=""
                                class="madel-size"
                            />14.2010
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div v-if="currentTab === 2" class="tab-content">
            <!-- Weekly Contest Content -->
            <p>Content for Weekly Contest</p>
        </div>

        <div v-if="currentTab === 3" class="tab-content">
            <!-- Monthly Contest Content -->
            <p>Content for Monthly Contest</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            currentTab: 0,
            tabTitles: [
                "Hour Contest",
                "Daily Contest",
                "Weekly Contest",
                "Monthly Contest",
            ],
        };
    },
};
</script>

<style scoped>
h2.big-win {
    margin-left: 76px;
    font-size: 14px;
    margin-top: 0px;
    display: inline-grid;
    font-weight: 600;
}
.tab-content {
    width: 90%;
    background: #001434;
    border-radius: 8px;
    padding: 20px;
    margin: auto;
}
.tabs {
    display: flex;
    flex-direction: column;
    /* align-items: center; */
    width: 100%;
}

.faq-tabs {
    display: flex;
    width: 60%;
    background: #001434;
    color: white;
    height: 58px;
    align-items: center;
    justify-content: space-around;
    border-radius: 35px;
    margin-bottom: 20px;
}

.faq-tab {
    padding: 10px 20px;
    cursor: pointer;
    text-align: center;
    transition: background 0.3s, color 0.3s;
}

.faq-tab.active {
    background: #0d244a;
    color: white;
    border-radius: 35px;
}

.muneeb {
    background-image: url("/image/new/download.png");
    background-size: 282px;
    background-repeat: no-repeat;
    margin: auto;
    min-height: 43px;
    width: 295px;
}
.first-table-image {
    background-image: url("/image/new/first.png");
    background-repeat: no-repeat;
    background-size: cover; /* Adjusts image to cover the element */
    width: 300px; /* Specify your desired width */
    height: 135px; /* Specify your desired height */
}

.Second-table-image {
    background-image: url("/image/new/second.png");
    background-repeat: no-repeat;
    background-size: cover; /* Adjusts image to cover the element */
    width: 300px; /* Specify your desired width */
    height: 135px; /* Specify your desired height */
}

.third-table-image {
    background-image: url("/image/new/third.png");
    background-repeat: no-repeat;
    background-size: cover; /* Adjusts image to cover the element */
    width: 300px; /* Specify your desired width */
    height: 135px; /* Specify your desired height */
}
</style>
