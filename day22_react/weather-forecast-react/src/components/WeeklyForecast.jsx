import DayForecast from "./DayForecast";
import { data } from "./Data";

const WeeklyForecast = () => {
	return (
		<>
			<div className="week-forecast">
				{data.map((day) => (
					<DayForecast
						key={day.day}
						day={day.day}
						weather={day.weather}
						tempDay={day.tempDay}
						tempNight={day.tempNight}
					/>
				))}
			</div>
		</>
	);
};

export default WeeklyForecast;
