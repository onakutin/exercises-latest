import "../styles/CountriesList.css";

export default function CountryCard({ country }) {
	return (
		<div className="country-card">
			<img className="flag" src={country.flags.png} alt="" />
			<div className="card__info">
				<h2>{country.name.common}</h2>
				<p>Population: {country.population}</p>
				<p>Region: {country.region}</p>
				<p>Capital: {country.capital}</p>
			</div>
		</div>
	);
}
