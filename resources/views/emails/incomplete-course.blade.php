<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Manual Handling Course is Ready</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f4f6; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased;">

<!-- Wrapper Table -->
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f3f4f6; padding: 20px 0;">
    <tr>
        <td align="center">
            <!-- Main Email Container -->
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">

                <!-- Header Banner / Logo Area -->
                <tr>
                    <td align="center" style="background-color: #0f172a; padding: 30px 20px;">
                        <h1 style="color: #ffffff; font-size: 22px; margin: 0; font-weight: 700; letter-spacing: 0.5px;">{{ config('app.name') }}</h1>
                    </td>
                </tr>

                <!-- Hero Section (Main Idea) -->
                <tr>
                    <td style="padding: 40px 40px 20px 40px;">
                        <h2 style="color: #1e293b; font-size: 24px; font-weight: 700; margin: 0 0 15px 0; line-height: 1.3;">
                            Hi {{ $user->name }}, your Manual Handling Course is waiting! 🛠️
                        </h2>
                        <p style="color: #475569; font-size: 16px; line-height: 1.6; margin: 0;">
                            We noticed you created an account, but you haven't secured your enrollment yet. Get certified today for work compliance, workplace safety, and complete peace of mind.
                        </p>
                    </td>
                </tr>

                <!-- Conversion CTA Button Block -->
                <tr>
                    <td align="center" style="padding: 10px 40px 30px 40px;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="center" style="background-color: #2563eb; border-radius: 6px;">
                                    <a href="{{ url('/home') }}" target="_blank" style="font-size: 16px; font-weight: 600; color: #ffffff; text-decoration: none; padding: 14px 28px; border-radius: 6px; border: 1px solid #2563eb; display: inline-block;">
                                        Complete My Enrollment &rarr;
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Value Proposition / Features Box -->
                <tr>
                    <td style="padding: 0 40px 30px 40px;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 20px;">
                            <tr>
                                <td>
                                    <p style="color: #0f172a; font-size: 14px; font-weight: 700; margin: 0 0 10px 0; text-transform: uppercase; letter-spacing: 0.5px;">What you get instantly:</p>
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td style="padding: 6px 0; color: #334155; font-size: 14px;" valign="top">
                                                <span style="color: #16a34a; font-weight: bold; margin-right: 8px;">✓</span> <strong>Fully Compliant:</strong> Meets all national safety standards.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 6px 0; color: #334155; font-size: 14px;" valign="top">
                                                <span style="color: #16a34a; font-weight: bold; margin-right: 8px;">✓</span> <strong>100% Online & Self-Paced:</strong> Finish on your schedule.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 6px 0; color: #334155; font-size: 14px;" valign="top">
                                                <span style="color: #16a34a; font-weight: bold; margin-right: 8px;">✓</span> <strong>Instant Certificate:</strong> Download right after passing.
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Secondary Sign-off & Support -->
                <tr>
                    <td style="padding: 0 40px 40px 40px; border-top: 1px solid #f1f5f9;">
                        <p style="color: #64748b; font-size: 14px; line-height: 1.5; margin: 25px 0 0 0;">
                            Have questions or experienced issues during registration? Just reply to this email—our support team is ready to help you out.
                        </p>
                        <p style="color: #64748b; font-size: 14px; margin: 15px 0 0 0;">
                            Cheers,<br>
                            <strong style="color: #1e293b;">The {{ config('app.name') }} Team</strong>
                        </p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td align="center" style="background-color: #f8fafc; padding: 20px; color: #94a3b8; font-size: 12px;">
                        <p style="margin: 0;">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
                        <p style="margin: 5px 0 0 0;"><a href="{{ url('/unsubscribe') }}" style="color: #94a3b8; text-decoration: underline;">Unsubscribe</a> from these notifications.</p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
