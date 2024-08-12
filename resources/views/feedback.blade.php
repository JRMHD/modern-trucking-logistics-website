<div style="font-family: Arial, sans-serif; background-color: #f0f0f0; padding: 20px; margin: 0;">
    <div
        style="max-width: 500px; margin: auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <h1 style="font-size: 28px; color: #000; margin-bottom: 30px; text-align: center; font-weight: 600;">Submit Your
            Feedback</h1>

        @if (session('status'))
            <div
                style="background-color: #ffe6e6; color: #d60000; border: 1px solid #ffcccc; border-radius: 4px; padding: 12px; margin-bottom: 20px; font-size: 14px;">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ url('/feedback') }}" method="POST">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="on_time_deliveries"
                    style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Rate On-Time Deliveries
                    (1-100)</label>
                <input type="number" name="on_time_deliveries" min="1" max="100" required
                    style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 4px; font-size: 16px; transition: border-color 0.3s ease;">
            </div>

            <div style="margin-bottom: 30px;">
                <label for="customer_satisfaction"
                    style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Rate Customer
                    Satisfaction (1-100)</label>
                <input type="number" name="customer_satisfaction" min="1" max="100" required
                    style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 4px; font-size: 16px; transition: border-color 0.3s ease;">
            </div>

            <button type="submit"
                style="width: 100%; background-color: #d60000; color: #fff; padding: 14px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: 600; transition: background-color 0.3s ease;">Submit
                Feedback</button>
        </form>
    </div>
</div>
