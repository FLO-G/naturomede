export type Aroma = {
  id: number,
  name: string,
  families: Array<Family>,
} 

export type Family = {
  id: number,
  name: string,
  group: Group,
  properties: Array<Property>,
}

export type Group = {
  id: number,
  name: string,
}

export type Property = {
  id: number,
  name: string,
}