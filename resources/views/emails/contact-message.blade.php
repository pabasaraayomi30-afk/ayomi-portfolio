<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>New Portfolio Message</title>
</head>

<body style="margin: 0; padding: 30px; background: #f4f4f5; font-family: Arial, sans-serif;">
    <div
        style="max-width: 600px; margin: auto; overflow: hidden;
               border-radius: 16px; background: #ffffff;
               box-shadow: 0 5px 20px rgba(0,0,0,0.08);"
    >
        <div style="background: #7e22ce; padding: 25px 30px;">
            <h1 style="margin: 0; color: #ffffff; font-size: 24px;">
                New Portfolio Message
            </h1>
        </div>

        <div style="padding: 30px;">
            <p style="margin-top: 0; color: #71717a;">
                You received a new message through your portfolio website.
            </p>

            <div style="margin-top: 25px;">
                <p style="margin-bottom: 5px; color: #71717a; font-size: 14px;">
                    Name
                </p>

                <p style="margin-top: 0; color: #18181b; font-weight: bold;">
                    {{ $contactMessage->name }}
                </p>
            </div>

            <div style="margin-top: 20px;">
                <p style="margin-bottom: 5px; color: #71717a; font-size: 14px;">
                    Email
                </p>

                <p style="margin-top: 0;">
                    <a
                        href="mailto:{{ $contactMessage->email }}"
                        style="color: #7e22ce; font-weight: bold;"
                    >
                        {{ $contactMessage->email }}
                    </a>
                </p>
            </div>

            <div style="margin-top: 20px;">
                <p style="margin-bottom: 10px; color: #71717a; font-size: 14px;">
                    Message
                </p>

                <div
                    style="border-radius: 10px; background: #f4f4f5;
                           padding: 20px; color: #27272a;
                           line-height: 1.7;"
                >
                    {{ $contactMessage->message }}
                </div>
            </div>

            <p style="margin-top: 30px; color: #a1a1aa; font-size: 12px;">
                Sent from Ayomi Portfolio
            </p>
        </div>
    </div>
</body>
</html>