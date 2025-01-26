import { config } from "@onflow/fcl";

config()
  .put("accessNode.api", "https://rest-testnet.onflow.org")
  .put("discovery.wallet", "https://fcl-discovery.onflow.org/testnet/authn")
  .put("app.detail.title", "Flow Bounty DApp")
  .put("app.detail.icon", "https://placekitten.com/g/200/200")
  .put("0xBountyContract", "0x9d2ade18cb6bea1a");