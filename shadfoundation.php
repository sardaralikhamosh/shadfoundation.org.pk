<style>
    /* Announcement Wrapper */
    .announcement-wrapper {
        width: 100%;
        overflow: hidden;
        position: relative;
        background: transparent; /* Light gray */
        border-bottom: 2px solid #ddd;
    }

    /* Marquee animation */
    .marquee {
        display: inline-block;
        min-width: 100%;
        animation: marquee 20s linear infinite;
        padding: 10px 0;
    }

    /* Announcement text */
    .marquee-content {
        display: flex;
        align-items: center;
        white-space: nowrap;
        font-size: 18px;
        font-weight: 500;
    }

    /* Links */
    .marquee-content a {
        color: #8ffff6;
        text-decoration: none;
        margin-left: 15px;
    }

    .marquee-content a:hover {
        color: #ff6600;
    }

    /* Blinking highlight */
    .blink {
        color: red;
        font-weight: bold;
        margin-right: 10px;
        animation: blink 1s infinite;
    }

    /* Keyframes for scrolling */
    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }

    /* Keyframes for blink effect */
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.3; }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .marquee-content {
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .marquee-content {
            font-size: 14px;
        }
    }
</style>

<div class="announcement-wrapper">
    <div class="marquee">
        <div class="marquee-content">
            <span class="blink">NEW!</span> 
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeQJVX1RKB3cbBondon1m7fpf0Q7K-E3k9nPCZ82eJ_yrbt_w/viewform" target="_blank">
                Hiring a Taekwondo Trainer – Click Here to Apply Online
            </a>
            &nbsp; | &nbsp;
            <span class="blink">URGENT!</span> 
            <a href="https://shadfoundation.org.pk/donate" target="_blank">
                Flood Relief Appeal – Dain Valley needs your urgent support. Donate now to provide food, shelter, clean water & medical aid.
            </a>
        </div>
    </div>
</div>
