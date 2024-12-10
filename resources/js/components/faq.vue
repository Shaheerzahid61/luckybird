<template>
    <div class="faq-container">
        <!-- Tabs Header -->
        <h1>Frequently Asked Questions</h1>
        <div class="row main-faq">
            <div class="col-md-3">
                <div class="faq-tabs">
                    <div
                        v-for="(tab, index) in tabTitles"
                        :key="index"
                        :class="['faq-tab', { active: currentTab === index }]"
                        @click="currentTab = index"
                    >
                        {{ tab }}
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="faq-content">
                    <div v-show="currentTab === 0">
                        <h4>
                            The Luckybird is a FREE-TO-PLAY online platform that
                            operates in 2 different modes: game coins mode &
                            Sweepstake Cash mode.
                        </h4>
                        <h2>HOW TO GET STARTED</h2>
                        <h4>1. What devices can I play Luckybird?</h4>
                        <p>
                            Luckybird sweeps is available on a wide range of
                            devices including mobile or pad devices as well as
                            desktop computers! Anything that supports a browser.
                        </p>
                        <h4>
                            2. Can I install/download Luckybird into my devices?
                        </h4>
                        <p>
                            Yes! Installing Luckybird sweeps onto your smart
                            devices is super easy! On Android devices, click on
                            "Add to Home Screen" from the menu and a prompt will
                            allow you to add Luckybird to your home screen...
                        </p>
                    </div>
                    <div v-show="currentTab === 1">
                        <h4>
                            The Luckybird is a FREE-TO-PLAY online platform that
                            operates in 2 different modes: game coins mode &
                            Sweepstake Cash mode.
                        </h4>
                        <h2>HOW TO COLLECT LUCKYBIRD SWEEPS</h2>

                        <ol>
                            <li>
                                To Participate, you must have an active
                                Luckybird Account. To enter the Luckybird, a
                                Participant must access Luckybird.io and sign in
                                to their Account.
                            </li>
                            <li>
                                Once they have accessed Luckybird, there are
                                three potential ways for an eligible Participant
                                to collect Luckybird Sweepstake Cash:
                            </li>
                        </ol>
                        <ul>
                            <li>
                                Receive Luckybird Sweepstake Cash as a free
                                bonus when purchasing Game Coins. Each
                                Participant may receive Luckybird Sweepstake
                                Cash as a bonus upon the purchase of
                                specifically marked packs of Game Coins. Game
                                Coins can be used for social gameplay in
                                Luckybird. Game Coins cannot be redeemed for
                                prizes. The number of Luckybird Sweepstake Cash
                                received as a bonus for each relevant Game Coin
                                purchase will be stated in the website purchase
                                window. All purchases of Game Coins are final,
                                and no refunds will be given.
                            </li>
                            <li>
                                Receive Luckybird Sweepstake Cash when entering
                                Luckybird no-cost giveaway contests on the
                                Luckybird Facebook page. Luckybird occasionally
                                holds Luckybird Sweepstake Cash no-cost giveaway
                                contests which Participants can enter by
                                following the instructions provided in the
                                contest. These giveaways may require some action
                                on the Participant’s part to be eligible for
                                entry. The amount of Luckybird Sweepstake Cash
                                given away will be stated on the applicable
                                Luckybird sweeps no-cost contest post and will
                                be credited to each contest winner’s Account.
                            </li>
                            <li>
                                Receive Luckybird Sweepstake Cash by logging
                                into your account and using the faucet feature.
                            </li>
                        </ul>
                    </div>
                    <div v-show="currentTab === 2">
                        <p>Details about Sweepstake Cash...</p>
                    </div>
                    <div v-show="currentTab === 3">
                        <p>General Questions content...</p>
                    </div>
                    <div v-show="currentTab === 4">
                        <p>Account Details content...</p>
                    </div>
                    <div v-show="currentTab === 5">
                        <p>Technical Problems content...</p>
                    </div>
                    <div v-show="currentTab === 6">
                        <p>Self Exclusion content...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            currentTab: 0,
            tabTitles: [
                "Get Started",
                "Collect Sweeps",
                "Sweepstake Cash",
                "General Questions",
                "Account Details",
                "Technical Problems",
                "Self Exclusion",
            ],
        };
    },
};
</script>

<style scoped>


.faq-container h1{
    color: white;
    font-size: 25px;
    font-weight: 700;
    margin: 15px;


}
.faq-container {
    max-width: 1000px;
    margin: 20px auto;
    background: transparent;
    border-radius: 8px;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    overflow: hidden;
    font-family: Arial, sans-serif;
}

.faq-tabs {
    display: flex;
    background-color: #051438;
    flex-direction: column;
    border-radius: 10px;
    padding: 15px 0px;
}

.faq-tab {
    padding: 15px 20px;
    cursor: pointer;
    color: #fff;
    flex: 1;
    font-size: 15px;
    text-align: left;
    font-weight: bold;
    transition: background 0.3s, color 0.3s;
}

.faq-tab:hover {
    background-color: #102f5c;
}

.faq-tab.active {
    background-color: #102f5c;
    color: #fff;
    border-left: 3px solid #20e793;
}

.faq-content {
    padding: 20px;
    background-color: #051438;
    height: 100%;
    border-radius: 10px;
}

.faq-content h2 {
    margin-top: 0;
    font-size: 1.5em;
    color: #20e793;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 10px;
}
.faq-content h4 {
    color: white;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 10px;
}

.faq-content p,ol,li {
    margin-bottom: 10px;
    line-height: 1.6;
    color: #738cbc;
}
</style>
