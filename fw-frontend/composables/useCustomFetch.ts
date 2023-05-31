export const useCustomFetch = (url: any, options: any) => {
	// Set your custom headers here
	const headers = {
		'Accept': 'application/json',
	}

	// Merge the custom headers with the options object
	const mergedOptions = {
		...options,
		headers: {
			...options?.headers,
			...headers,
		},
	}

	// Use the useFetch function with the modified options
	return useFetch(url, mergedOptions)
}