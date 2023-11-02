import { useEffect, useState } from "react";
import CountryCard from "./CountryCard";
import "../styles/CountriesList.css";

export default function CountriesList() {
	const [countries, setCountries] = useState(null);

	const loadCountries = async () => {
		const response = await fetch("https://restcountries.com/v3.1/all");
		const data = await response.json();
		setCountries(data);
	};

	useEffect(() => {
		loadCountries();
	}, []);

	if (!countries) {
		return;
	}

	const sortedCountries = countries.sort(function (a, b) {
		if (a.name.common < b.name.common) {
			return -1;
		}
		if (a.name.common > b.name.common) {
			return 1;
		}
		return 0;
	});

	return (
		<>
			<main>
				{countries ? (
					sortedCountries.map((country) => (
						<CountryCard key={country.ccn3} country={country} />
					))
				) : (
					<p>Loading...</p>
				)}
			</main>
		</>
	);
}
