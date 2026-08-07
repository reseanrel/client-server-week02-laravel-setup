<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Profile — {{ $student['name'] }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Rubik:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        >

        <style>
            :root {
                --ink: #1b1b18;
                --paper: #fdf3dc;
                --card: #ffffff;
                --yellow: #ffd166;
                --coral: #ff6b57;
                --mint: #5ee6a8;
                --sky: #7fd6f2;
                --lavender: #c9a9ff;
                --shadow: 8px 8px 0 var(--ink);
                --shadow-sm: 4px 4px 0 var(--ink);
            }

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: 'Rubik', ui-sans-serif, system-ui, sans-serif;
                background-color: var(--paper);
                color: var(--ink);
                min-height: 100vh;
                padding: 48px 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-image: radial-gradient(var(--ink) 1.5px, transparent 1.5px);
                background-size: 26px 26px;
                background-position: 0 0;
            }

            .card {
                width: 100%;
                max-width: 920px;
                background: var(--card);
                border: 4px solid var(--ink);
                border-radius: 28px;
                box-shadow: var(--shadow);
                padding: 40px;
                position: relative;
            }

            /* Chunky corner marks */
            .card::before,
            .card::after {
                content: '';
                position: absolute;
                width: 34px;
                height: 34px;
                background: var(--ink);
            }
            .card::before {
                top: -4px;
                right: -4px;
                border-radius: 0 24px 0 0;
            }
            .card::after {
                bottom: -4px;
                left: -4px;
                border-radius: 0 0 0 24px;
            }

            .top-bar {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                margin-bottom: 32px;
            }

            .pill {
                display: inline-block;
                font-family: 'Archivo Black', ui-sans-serif, system-ui, sans-serif;
                font-size: 14px;
                letter-spacing: 2px;
                text-transform: uppercase;
                background: var(--yellow);
                border: 3px solid var(--ink);
                border-radius: 999px;
                padding: 8px 20px;
                box-shadow: var(--shadow-sm);
            }

            .date-chip {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                font-size: 15px;
                font-weight: 600;
                background: var(--card);
                border: 3px solid var(--ink);
                border-radius: 12px;
                padding: 8px 16px;
                box-shadow: var(--shadow-sm);
            }

            .date-chip .dot {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: var(--coral);
                border: 2px solid var(--ink);
            }

            .hero {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 28px;
                margin-bottom: 36px;
            }

            .avatar {
                width: 128px;
                height: 128px;
                border-radius: 28px;
                background: var(--sky);
                border: 4px solid var(--ink);
                box-shadow: var(--shadow-sm);
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: 'Archivo Black', ui-sans-serif, system-ui, sans-serif;
                font-size: 44px;
                flex-shrink: 0;
                transform: rotate(-3deg);
            }

            .title h1 {
                font-family: 'Archivo Black', ui-sans-serif, system-ui, sans-serif;
                font-size: clamp(34px, 6vw, 56px);
                line-height: 1.05;
                text-transform: uppercase;
                letter-spacing: -1px;
            }

            .title .sub {
                margin-top: 8px;
                font-size: 18px;
                font-weight: 600;
                color: var(--ink);
                display: inline-block;
                background: var(--mint);
                border: 3px solid var(--ink);
                border-radius: 10px;
                padding: 4px 14px;
                box-shadow: 3px 3px 0 var(--ink);
            }

            .divider {
                height: 4px;
                background: var(--ink);
                border-radius: 4px;
                margin-bottom: 32px;
            }

            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }

            .info-card {
                border: 3px solid var(--ink);
                border-radius: 18px;
                padding: 16px 18px;
                box-shadow: var(--shadow-sm);
                transition: transform 0.12s ease, box-shadow 0.12s ease;
            }

            .info-card:hover {
                transform: translate(-2px, -2px);
                box-shadow: 6px 6px 0 var(--ink);
            }

            .info-card .label {
                font-size: 12px;
                font-weight: 700;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                margin-bottom: 8px;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .info-card .value {
                font-family: 'Archivo Black', ui-sans-serif, system-ui, sans-serif;
                font-size: 18px;
                line-height: 1.25;
                overflow-wrap: anywhere;
            }

            .card-yellow { background: var(--yellow); }
            .card-mint   { background: var(--mint); }
            .card-coral  { background: var(--coral); }
            .card-sky    { background: var(--sky); }

            .badge-dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                border: 2px solid var(--ink);
                background: var(--card);
                flex-shrink: 0;
            }

            .footer {
                margin-top: 36px;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
                gap: 12px;
                font-size: 14px;
                font-weight: 600;
            }

            .footer .tag {
                background: var(--lavender);
                border: 3px solid var(--ink);
                border-radius: 999px;
                padding: 6px 16px;
                box-shadow: 3px 3px 0 var(--ink);
                font-family: 'Archivo Black', ui-sans-serif, system-ui, sans-serif;
                font-size: 12px;
                letter-spacing: 1px;
                text-transform: uppercase;
            }

            @media (max-width: 560px) {
                body {
                    padding: 24px 14px;
                }
                .card {
                    padding: 24px;
                    border-radius: 20px;
                }
                .avatar {
                    width: 96px;
                    height: 96px;
                    font-size: 34px;
                    border-radius: 22px;
                }
                .top-bar {
                    justify-content: center;
                }
            }
        </style>
    </head>
    <body>
        <main class="card">
            <div class="top-bar">
                <span class="pill">Student Profile</span>
                <span class="date-chip">
                    <span class="dot"></span>
                    {{ $currentDate }}
                </span>
            </div>

            <div class="hero">
                <div class="avatar">{{ $student['initials'] }}</div>
                <div class="title">
                    <h1>{{ $student['name'] }}</h1>
                    <span class="sub">{{ $student['section'] }} · {{ $student['course'] }}</span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="grid">
                <div class="info-card card-yellow">
                    <div class="label"><span class="badge-dot"></span>Student Number</div>
                    <div class="value">{{ $student['number'] }}</div>
                </div>

                <div class="info-card card-mint">
                    <div class="label"><span class="badge-dot"></span>Course</div>
                    <div class="value">{{ $student['course'] }}</div>
                </div>

                <div class="info-card card-coral">
                    <div class="label"><span class="badge-dot"></span>Section</div>
                    <div class="value">{{ $student['section'] }}</div>
                </div>

                <div class="info-card card-sky">
                    <div class="label"><span class="badge-dot"></span>Subject</div>
                    <div class="value">{{ $student['subject'] }}</div>
                </div>
            </div>

            <div class="footer">
                <span>Laravel v{{ app()->version() }}</span>
                <span class="tag">Client / Server Technologies</span>
            </div>
        </main>
    </body>
</html>
