<div class="cta3-section">
    <div class="cta3-overlay">
        <div class="cta3-container">
            <h2 class="cta3-title">Ready to Join Us?</h2>
            <p class="cta3-description">
                Be part of an extraordinary experience. Connect with industry leaders,
                showcase your innovations, and create lasting partnerships.
            </p>
            <div class="cta3-buttons">
                <button class="cta3-btn cta3-btn-primary" onclick={{ route('register') }}>
                    Register Now
                </button>
                <button class="cta3-btn cta3-btn-secondary">
                    Become an Exhibitor
                </button>
                <button class="cta3-btn cta3-btn-tertiary">
                    Sponsorship Opportunities
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .cta3-section {
        min-height: 100vh;
        background-image: url('https://images.pexels.com/photos/2774556/pexels-photo-2774556.jpeg?auto=compress&cs=tinysrgb&w=1920');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4rem 1.5rem;
    }

    .cta3-overlay {
        background: rgba(0, 0, 0, 0.75);
        backdrop-filter: blur(8px);
        border-radius: 24px;
        padding: 4rem 3rem;
        max-width: 1000px;
        width: 100%;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
    }

    .cta3-container {
        text-align: center;
    }

    .cta3-title {
        font-size: 3.5rem;
        font-weight: 700;
        background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .cta3-description {
        font-size: 1.25rem;
        color: #e5e7eb;
        margin-bottom: 3rem;
        line-height: 1.8;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .cta3-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        justify-content: center;
        align-items: center;
    }

    .cta3-btn {
        padding: 1rem 2.5rem;
        font-size: 1.125rem;
        font-weight: 600;
        border-radius: 12px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .cta3-btn-primary {
        background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
        color: white;
    }

    .cta3-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(193, 154, 95, 0.5);
    }

    .cta3-btn-secondary {
        background: linear-gradient(135deg, #c19a5f, #976737);
        color: white;
    }

    .cta3-btn-secondary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(151, 103, 55, 0.5);
    }

    .cta3-btn-tertiary {
        background: transparent;
        color: #c19a5f;
        border: 2px solid #c19a5f;
    }

    .cta3-btn-tertiary:hover {
        background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(193, 154, 95, 0.4);
    }

    @media (max-width: 768px) {
        .cta3-section {
            padding: 2rem 1rem;
        }

        .cta3-overlay {
            padding: 2.5rem 1.5rem;
        }

        .cta3-title {
            font-size: 2.5rem;
        }

        .cta3-description {
            font-size: 1.125rem;
        }

        .cta3-buttons {
            flex-direction: column;
            width: 100%;
        }

        .cta3-btn {
            width: 100%;
            max-width: 350px;
        }
    }
</style>
