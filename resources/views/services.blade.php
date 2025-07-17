<style>
    .scholarship-country {
        position: relative;
        padding: 20px;
        border-radius: 12px;
        background-color: #f9f9f9;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .scholarship-country:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
    }

    .scholarship-flag {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .scholarship-flag span {
        margin-left: 8px;
        font-size: 20px;
    }

    .scholarship-list {
        margin-left: 25px;
    }

    .scholarship-list li {
        padding: 5px 0;
        list-style-type: disc;
        color: #333;
    }

    .scholarship-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    /* Optional: placeholder for background image per card */
    .scholarship-country[data-bg] {
        background-size: cover;
        background-position: center;
        color: white;
    }

    .scholarship-country[data-bg]:before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 0;
    }

    .scholarship-country * {
        position: relative;
        z-index: 1;
    }
</style>

<div class="container mx-auto px-4 py-6">
    <h2 class="text-3xl font-bold mb-4">🎓 Scholarships by Country</h2>
    <div class="scholarship-grid">

        <!-- 🇨🇳 China -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇨🇳 <span>China Scholarships</span></div>
            
            <ul class="scholarship-list">
                <li>CSC Scholarship (Chinese Government Scholarship)</li>
                <li>Schwarzman Scholars Program</li>
                <li>Silk Road Scholarship</li>
                <li>Shanghai Government Scholarship</li>
                <li>ANSO Scholarship (USTC/UCAS)</li>
                <li>Confucius Institute Scholarship</li>
                <li>University-Specific Scholarships</li>
            </ul>
        </div>

        <!-- 🇮🇹 Italy -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇮🇹 <span>Italy Scholarships</span></div>
            <ul class="scholarship-list">
                <li>MAECI Scholarship</li>
                <li>Regional Scholarships (LazioDisco, EDISU...)</li>
                <li>University Merit-Based Scholarships</li>
                <li>Invest Your Talent in Italy</li>
            </ul>
        </div>

        <!-- 🇹🇭 Thailand -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇹🇭 <span>Thailand Scholarships</span></div>
            <ul class="scholarship-list">
                <li>Thailand Government Scholarships</li>
                <li>Chulalongkorn University Scholarships</li>
                <li>AIT Scholarships</li>
                <li>SIIT Scholarship</li>
                <li>Royal Thai Government Scholarships</li>
            </ul>
        </div>

        <!-- 🇰🇷 South Korea -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇰🇷 <span>South Korea Scholarships</span></div>
            <ul class="scholarship-list">
                <li>GKS (Global Korea Scholarship)</li>
                <li>University Scholarships (KAIST, POSTECH...)</li>
                <li>POSCO Asia Fellowship</li>
                <li>KFAS Scholarships</li>
            </ul>
        </div>

        <!-- 🇪🇺 Europe-Wide -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇪🇺 <span>Europe-Wide Scholarships</span></div>
            <ul class="scholarship-list">
                <li>Erasmus Mundus Joint Master’s</li>
                <li>Marie Skłodowska-Curie Actions</li>
                <li>DAAD-Erasmus Exchange Programs</li>
            </ul>
        </div>

        <!-- 🇩🇪 Germany -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇩🇪 <span>Germany Scholarships</span></div>
            <ul class="scholarship-list">
                <li>DAAD Scholarship</li>
                <li>Deutschlandstipendium</li>
                <li>Heinrich Böll Foundation</li>
                <li>Konrad-Adenauer-Stiftung</li>
                <li>Friedrich Ebert Stiftung</li>
                <li>University-specific waivers</li>
            </ul>
        </div>

        <!-- 🇨🇦 Canada -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇨🇦 <span>Canada Scholarships</span></div>
            <ul class="scholarship-list">
                <li>Vanier Canada Graduate Scholarships</li>
                <li>Banting Postdoctoral Fellowships</li>
                <li>Lester B. Pearson Scholarship</li>
                <li>Ontario Graduate Scholarship (OGS)</li>
                <li>University Scholarships (UAlberta, UBC...)</li>
                <li>Mitacs Globalink Internship</li>
            </ul>
        </div>

        <!-- 🇺🇸 United States -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇺🇸 <span>United States Scholarships</span></div>
            <ul class="scholarship-list">
                <li>Fulbright Foreign Student Program</li>
                <li>Humphrey Fellowship</li>
                <li>Stanford Knight-Hennessy Scholars</li>
                <li>Gates Scholarship</li>
                <li>AAUW International Fellowships</li>
                <li>University Scholarships (Harvard, MIT...)</li>
            </ul>
        </div>

        <!-- 🇬🇧 United Kingdom -->
        <div class="scholarship-country">
            <div class="scholarship-flag">🇬🇧 <span>United Kingdom Scholarships</span></div>
            <ul class="scholarship-list">
                <li>Chevening Scholarship</li>
                <li>Commonwealth Scholarship</li>
                <li>Rhodes Scholarship</li>
                <li>Gates Cambridge Scholarship</li>
                <li>Clarendon Fund Scholarships</li>
                <li>University-specific awards</li>
            </ul>
        </div>

    </div>
</div>
