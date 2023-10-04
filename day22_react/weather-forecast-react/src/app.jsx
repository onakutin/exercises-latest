import "./app.css";
import WeeklyForecast from "./components/WeeklyForecast";

export function App() {
	return (
		<>
			<div className="container">
				<h1>Weekly Weather Forecast</h1>
				<WeeklyForecast />
			</div>
		</>
	);
}
